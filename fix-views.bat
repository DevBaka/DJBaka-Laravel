@echo off
echo Fixing view cache...

:: Stop if any command fails
setlocal enabledelayedexpansion

:: Remove the entire view cache directory
rmdir /s /q "storage\framework\views"

:: Recreate the directory
mkdir "storage\framework\views"

:: Create a .gitignore file to keep the directory
echo * > "storage\framework\views\.gitignore"
echo !.gitignore >> "storage\framework\views\.gitignore"

echo.
echo View cache has been reset.
echo Now run: docker-compose exec laravel_djbaka php artisan view:cache
pause
