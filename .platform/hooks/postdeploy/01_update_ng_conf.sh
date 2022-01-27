#!/usr/bin/bash


# Restart nginx to apply modifications
cd ./ 
sudo service nginx restart

cd /var/www/html

php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
