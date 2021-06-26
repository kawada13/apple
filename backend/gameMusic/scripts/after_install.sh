#!/bin/bash

set -eux

cd ~/apple/development
sudo docker-compose up -d
sudo docker-compose exec -T app npm run install
sudo docker-compose exec -T app npm run production
sudo docker-compose exec -T app php artisan config:cache

