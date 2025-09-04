@echo off
echo Clearing Laravel caches...

:: Clear caches
docker-compose exec laravel_djbaka php artisan view:clear
docker-compose exec laravel_djbaka php artisan config:clear
docker-compose exec laravel_djbaka php artisan cache:clear
docker-compose exec laravel_djbaka php artisan route:clear

echo.
echo Re-caching...
echo.

::docker-compose exec laravel_djbaka php artisan config:cache
::docker-compose exec laravel_djbaka php artisan route:cache
::docker-compose exec laravel_djbaka php artisan view:cache

echo.
echo All caches cleared and re-cached successfully!
pause
