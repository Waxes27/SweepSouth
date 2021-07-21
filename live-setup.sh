composer install --no-dev
cp .env.example .env
chmod -R 777 database/ app/ resources/ public/ routes/ storage/ vendor/
php artisan key:generate
mv * ..
