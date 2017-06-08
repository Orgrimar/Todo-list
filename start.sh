#!/bin/dev

echo Mise en place de composer
composer install

echo Migration et Seed
php artisan migrate
php artisan db:seed
