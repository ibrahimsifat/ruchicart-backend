# Dockerfile.dev
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    supervisor \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache \
    zip

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install Swoole for Laravel Octane
RUN pecl install swoole && docker-php-ext-enable swoole

# Install Xdebug (development only)
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Development specific settings
COPY php.dev.ini /usr/local/etc/php/conf.d/php.dev.ini
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

USER www-data

EXPOSE 9000
CMD ["php-fpm"]

# =====================================

# Dockerfile.prod
FROM node:16 as node-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run production

FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    supervisor \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache \
    zip

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install Swoole for Laravel Octane
RUN pecl install swoole && docker-php-ext-enable swoole

# Configure opcache for production
RUN docker-php-ext-install opcache && \
    docker-php-ext-enable opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . /var/www
COPY --from=node-builder /app/public/js /var/www/public/js
COPY --from=node-builder /app/public/css /var/www/public/css

# Production specific settings
COPY php.prod.ini /usr/local/etc/php/conf.d/php.prod.ini
COPY opcache.prod.ini /usr/local/etc/php/conf.d/opcache.ini

# Install production dependencies
RUN composer install --no-dev --optimize-autoloader

# Optimize Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Set correct permissions
RUN chown -R www-data:www-data /var/www && \
    chmod -R 755 /var/www/storage

USER www-data

EXPOSE 9000
CMD ["php-fpm"]