FROM php:8.2-apache

# 1. Install dependency sistem & ekstensi PHP
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

# 2. Install Node.js & NPM (untuk build assets Vite/Tailwind)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && apt-get install -y nodejs

# 3. Konfigurasi Apache & Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY . .

# 4. Install PHP & Node Dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader --no-scripts --ignore-platform-reqs

# Build frontend assets (jika project menggunakan Vite/NPM)
RUN if [ -f package.json ]; then npm install && npm run build; fi

# 5. Siapkan folder database & hak akses awal
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 storage bootstrap/cache database

# 6. Perintah Startup: Migrate database, perbaiki izin ke www-data, lalu jalankan Apache
CMD ["sh", "-c", "touch database/database.sqlite && php artisan config:clear && php artisan migrate --force && chown -R www-data:www-data database storage bootstrap/cache && chmod -R 777 database storage && apache2-foreground"]
