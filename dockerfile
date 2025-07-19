FROM php:8.3-fpm

# Instala dependencias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala extensiones de PHP, incluyendo PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código
WORKDIR /var/www
COPY . .

# Instala dependencias PHP
RUN composer update && composer install --no-dev --optimize-autoloader

# Permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Puerto para Laravel
EXPOSE 8000

# Comando para ejecutar Laravel
CMD php artisan migrate --force && php artisan db:seed && php artisan serve --host=0.0.0.0 --port=8000
