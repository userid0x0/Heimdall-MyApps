# Heimdall-MyApps

## ShortDescription
A simple EnhancedApp that shows a static short description.
### Installation
Based on `linuxserver/heimdall:v2.5.6-ls221`
```bash
cd <compose folder>
cp -r <path_to>/ShortDescription ./config/www/SupportedApps
cp ./config/www/SupportedApps/shortdesc.png ./config/www/icons
docker exec heimdall php /app/www/artisan register:app ShortDescription
```
