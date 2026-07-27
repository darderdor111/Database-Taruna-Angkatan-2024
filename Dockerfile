FROM php:8.2-apache

# Install dependency sistem & ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    zip \
    unzip \
    libsqlite3-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_sqlite zip bcmath mbstring gd fileinfo

# Izinkan Composer berjalan sebagai root
ENV COMPOSER_ALLOW_SUPERUSER=1

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

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader --no-scripts --ignore-platform-reqs

# Buat direktori & file sqlite awal
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data storage bootstrap/cache database
RUN chmod -R 775 storage bootstrap/cache database

# Otomatis pastikan file sqlite ada, izinkan hak akses, dan jalankan migration saat startup
CMD ["sh", "-c", "mkdir -p database && touch database/database.sqlite && chmod -R 777 database && chown -R www-data:www-data storage bootstrap/cache database && php artisan migrate --force && apache2-foreground"]
