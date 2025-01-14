# Set proper permissions for Laravel directories

chmod -R 775 storage bootstrap/cache

# Build the containers

docker-compose build

# Start the containers

docker-compose up -d

# To see the logs

docker-compose logs -f

# To stop the containers

docker-compose down

# To restart

docker-compose down && docker-compose up -d

# To run tests

docker-compose exec app php artisan test

# Try to clear Laravel's caches:

docker-compose -f docker-compose.dev.yml exec php php artisan cache:clear
docker-compose -f docker-compose.dev.yml exec php php artisan config:clear
docker-compose -f docker-compose.dev.yml exec php php artisan route:clear
docker-compose -f docker-compose.dev.yml exec php php artisan view:clear

# To build and run:

## Development: docker-compose -f docker-compose.dev.yml up --build

## Production:

setup SSL

# Install Certbot

sudo apt-get install certbot python3-certbot-nginx

# Obtain SSL certificate

sudo certbot --nginx -d ruchicart.com -d www.ruchicart.com

1. docker-compose -f docker-compose.prod.yml up -d --build
2. docker-compose -f docker-compose.prod.yml exec --user root php bash
3. composer install

# Set correct ownership and permissions

1. docker-compose -f docker-compose.prod.yml exec --user root php bash
   chown -R www:www /var/www/storage
   chown -R www:www /var/www/bootstrap/cache
   chmod -R 775 /var/www/storage
   chmod -R 775 /var/www/bootstrap/cache
