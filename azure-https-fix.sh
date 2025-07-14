#!/bin/bash
# Azure HTTPS Fix Script
# Run this in your Azure App Service SSH console

cd /home/site/wwwroot

echo "Fixing HTTPS mixed content issues..."

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

echo "Caches cleared."

# Rebuild optimized caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Caches rebuilt."

# Test the configuration
echo "Testing asset URLs..."
php artisan tinker --execute="
  echo 'APP_URL: ' . config('app.url');
  echo 'ASSET_URL: ' . config('app.asset_url', 'not set');
  echo 'Environment: ' . config('app.env');
  echo 'Debug: ' . (config('app.debug') ? 'true' : 'false');
"

echo "Script completed. Check if your assets now load over HTTPS."
