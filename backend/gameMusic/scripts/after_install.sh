#!/bin/bash

set -eux

cd ~/apple/development
docker-compose up -d
docker-compose exec -T app composer install
docker-compose exec -T app php artisan migrate
docker-compose exec -T app php artisan config:cache

