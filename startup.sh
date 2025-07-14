#!/bin/bash

# Make sure we're in the right directory
cd /home/site/wwwroot

# Set proper permissions
chmod -R 755 storage bootstrap/cache
chmod -R 777 storage

# Ensure SSL certificate is accessible
chmod 644 storage/DigiCertGlobalRootCA.crt.pem

# Create necessary storage directories
mkdir -p storage/app/public
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

# Clear and cache config
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Generate app key if not set
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generate application key
php artisan key:generate --force

# Create storage link
php artisan storage:link

# Test database connection
echo "Testing database connection..."
php artisan tinker --execute="DB::connection()->getPdo();"
if [ $? -eq 0 ]; then
    echo "Database connection successful!"
else
    echo "Database connection failed. Please check your Azure MySQL configuration."
    exit 1
fi

# Cache configurations for better performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations and seed (with retry for Azure MySQL)
echo "Running migrations..."
php artisan migrate --force
if [ $? -ne 0 ]; then
    echo "Migration failed, retrying in 10 seconds..."
    sleep 10
    php artisan migrate --force
fi

echo "Seeding database..."
php artisan db:seed --force

echo "Laravel app setup completed with Azure MySQL!"
