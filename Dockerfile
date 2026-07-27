FROM php:8.2-apache

# Install dependency sistem & ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    libsqlite3-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_sqlite zip bcmath mbstring

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Ubah DocumentRoot Apache ke /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set working directory
WORKDIR /var/www/html

# Copy seluruh file project
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependency Laravel (--no-scripts mencegah error saat build)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Set izin folder storage & cache
RUN chown -R www-data:www-data storage bootstrap/cache
