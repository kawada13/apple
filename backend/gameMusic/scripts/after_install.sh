#!/bin/bash

set -eux

cd ~/apple/backend/gameMusic
php artisan migrate --force
php artisan config:cache
