#!/bin/bash

if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-progress --no-interaction
fi

php artisan optimize:clear
php artisan migrate --force
php artisan key:generate

exec docker-php-entrypoint "$@"
