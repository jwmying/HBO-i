docker exec HBO-i-mysql-container mysql -u root --password=hbo-i-pass -e "create schema hbo_i;"
docker exec laravel-webapp-container php artisan key:generate
docker exec laravel-webapp-container php artisan migrate