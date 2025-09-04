#!/bin/bash

# Colors for better output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}Clearing Laravel caches...${NC}"

# Run inside Docker container
docker-compose exec laravel_djbaka php artisan view:clear
docker-compose exec laravel_djbaka php artisan config:clear
docker-compose exec laravel_djbaka php artisan cache:clear
docker-compose exec laravel_djbaka php artisan route:clear

echo -e "\n${YELLOW}Re-caching...${NC}"

docker-compose exec laravel_djbaka php artisan config:cache
docker-compose exec laravel_djbaka php artisan route:cache
docker-compose exec laravel_djbaka php artisan view:cache

echo -e "\n${GREEN}All caches cleared and re-cached successfully!${NC}"
