# 🌊 Azure Web App + MySQL Tourism App Deployment Guide

## 📋 Prerequisites
1. Azure Web App created
2. Azure Database for MySQL server created
3. Database named `tourism_app` created in your MySQL server
4. Azure Web App configured to use your custom domain (optional)

## 🔧 Step 1: Azure MySQL Database Setup

### Create MySQL Database:
```bash
# Using Azure CLI
az mysql flexible-server create \
  --resource-group your-resource-group \
  --name your-mysql-server \
  --admin-user mysqluser \
  --admin-password YourPassword123! \
  --sku-name Standard_B1ms \
  --tier Burstable \
  --public-access 0.0.0.0 \
  --storage-size 20 \
  --version 8.0

# Create database
az mysql flexible-server db create \
  --resource-group your-resource-group \
  --server-name your-mysql-server \
  --database-name tourism_app
```

### Or via Azure Portal:
1. Create "Azure Database for MySQL flexible server"
2. Configure networking to allow Azure services
3. Create database named `tourism_app`
4. Note down connection details

## 🚀 Step 2: Azure Web App Configuration

### Application Settings (Environment Variables):
```
APP_NAME="Tourism App"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.azurewebsites.net
DB_CONNECTION=mysql
DB_HOST=your-mysql-server.mysql.database.azure.com
DB_PORT=3306
DB_DATABASE=tourism_app
DB_USERNAME=mysqluser
DB_PASSWORD=YourPassword123!
MYSQL_ATTR_SSL_CA=/home/site/wwwroot/storage/DigiCertGlobalRootCA.crt.pem
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
LOG_LEVEL=error
```

### General Settings:
- **PHP Version**: 8.1 or higher
- **Platform**: 64-bit
- **Always On**: Enabled (if not using Free tier)

### Path Mappings:
- **Virtual Path**: `/`
- **Physical Path**: `site\wwwroot\public`

## 📦 Step 3: Deployment Options

### Option A: GitHub Actions (Recommended)
1. Connect your repository to Azure Web App
2. Azure auto-generates deployment workflow
3. Push your code to trigger deployment

### Option B: ZIP Deployment
```bash
# Build assets locally
npm install
npm run build

# Create deployment ZIP (exclude node_modules, .git, etc.)
zip -r tourism-app.zip . -x "node_modules/*" ".git/*" "*.log"

# Deploy using Azure CLI
az webapp deployment source config-zip \
  --resource-group your-resource-group \
  --name your-app-name \
  --src tourism-app.zip
```

## ⚙️ Step 4: Post-Deployment Setup

### SSH into Azure Web App Console:
```bash
# Navigate to app directory
cd /home/site/wwwroot

# Set permissions
chmod -R 755 storage bootstrap/cache
chmod -R 777 storage
chmod 644 storage/DigiCertGlobalRootCA.crt.pem

# Create storage directories
mkdir -p storage/app/public storage/framework/{cache,sessions,views} storage/logs

# Setup Laravel
php artisan key:generate --force
php artisan storage:link

# Clear and cache
php artisan config:clear && php artisan cache:clear
php artisan config:cache && php artisan route:cache && php artisan view:cache

# Test database connection
php artisan tinker --execute="DB::connection()->getPdo(); echo 'Database connected successfully!';"

# Run migrations and seeders
php artisan migrate --force
php artisan db:seed --force
```

## 🧪 Step 5: Verification

### Test endpoints:
- `https://your-app-name.azurewebsites.net/test` - System status
- `https://your-app-name.azurewebsites.net/` - Tourism app homepage
- `https://your-app-name.azurewebsites.net/destinations` - Destinations list

### Expected test response:
```json
{
  "status": "success",
  "message": "Tourism App is running on Azure with MySQL!",
  "database": {
    "status": "Connected to mysql",
    "host": "your-mysql-server.mysql.database.azure.com",
    "database": "tourism_app",
    "spots_count": 20
  }
}
```

## 🚨 Common Issues & Solutions

### Issue 1: Database connection timeout
**Solution**: Ensure Azure Web App has network access to MySQL server
```bash
# Check firewall rules in Azure MySQL
# Add rule: 0.0.0.0 - 255.255.255.255 (Allow Azure services)
```

### Issue 2: SSL connection required
**Solution**: SSL certificate is included, but verify path:
```bash
ls -la /home/site/wwwroot/storage/DigiCertGlobalRootCA.crt.pem
```

### Issue 3: Migration fails
**Solution**: Check MySQL version compatibility and charset:
```bash
php artisan tinker --execute="
  echo 'MySQL Version: ' . DB::select('SELECT VERSION()')[0]->{'VERSION()'};
  echo 'Default Charset: ' . DB::select('SELECT @@character_set_database')[0]->{'@@character_set_database'};
"
```

### Issue 4: Storage permissions
**Solution**: Reset permissions:
```bash
cd /home/site/wwwroot
find storage -type d -exec chmod 755 {} \;
find storage -type f -exec chmod 644 {} \;
chmod -R 777 storage/logs storage/framework
```

## 🔐 Security Best Practices

1. **Use separate database user** with minimal permissions
2. **Enable SSL** on MySQL server
3. **Restrict database firewall** to Azure services only
4. **Use Azure Key Vault** for sensitive configuration (optional)
5. **Enable Application Insights** for monitoring

## 📊 Performance Optimization

1. **Enable opcache** in PHP settings
2. **Use Redis cache** for session/cache (optional upgrade)
3. **Configure CDN** for static assets
4. **Enable compression** in web.config

## 🎯 Quick Checklist

- [ ] Azure MySQL server created and accessible
- [ ] Database `tourism_app` exists
- [ ] Web App environment variables configured
- [ ] Document root set to `/public`
- [ ] PHP 8.1+ selected
- [ ] SSL certificate uploaded
- [ ] Migrations run successfully
- [ ] Test endpoint returns expected response
- [ ] Tourism app loads correctly

Your Tourism App should now be running successfully on Azure with MySQL! 🌴
