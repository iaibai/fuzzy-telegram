# Fuzzy Telegram
*A simple vanilla PHP web application displaying random quote of the day.*

## Details
Uses Slim, and bits.

## Requirements
pdo_mysql, php-xml

## Installation
composer install

## Development Environment
docker-compose up

Run migrations (phinx):

docker exec -it [container id] vendor/bin/phinx migrate
