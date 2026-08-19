FROM php:8.1-apache

# Install ekstensi yang dibutuhkan PrestaShop
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli zip intl opcache \
    && a2enmod rewrite

# Copy seluruh file PrestaShop ke folder web server
COPY . /var/www/html/

# Atur permission folder
RUN chown -R www-data:www-data /var/www/html