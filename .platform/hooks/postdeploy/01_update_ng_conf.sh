#!/usr/bin/bash


# Restart nginx to apply modifications
cd ./ 
sudo service nginx restart

cd /var/www/html
sudo cp /var/www/env/.env /var/www/html
npm install
npm run dev


sudo chmod 777 -R bootstrap/cache
sudo chown -R $USER:apache storage
sudo chmod -R 777 storage

php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
