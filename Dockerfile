FROM php:8.3-apache

# Instalo las dependencias de sistema
RUN apt-get update && apt-get install -y \
    curl \
    git \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    acl \
    nano \
    sudo

# Configurar locale
RUN echo "en_US.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype \
    && docker-php-ext-install -j$(nproc) pdo pdo_pgsql pdo_mysql zip exif pcntl gd

# Habilitar el módulo rewrite de Apache, esencial para Laravel
RUN a2enmod rewrite

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Dar permisos a Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && a2ensite 000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Expose port 80
EXPOSE 80
