#!/bin/bash

set -eux

cd ~/apple/development
sudo docker-compose up -d
# sudo docker-compose exec app npm install
# sudo docker-compose exec app npm run production
# sudo docker-compose exec app php artisan config:cache

