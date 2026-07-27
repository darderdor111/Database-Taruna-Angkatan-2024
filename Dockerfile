FROM php:8.2-apache

# Install ekstensi yang dibutuhkan Laravel & SQLite
RUN apt-get update && apt-get install -y libzip-dev zip unzip libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Ubah settingan Apache agar mengarah ke folder /public Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Pindahkan file kodingan ke dalam server
WORKDIR /var/www/html
COPY . .

# Install Composer dan Dependency Laravel
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Berikan izin folder agar Laravel bisa menyimpan log/cache
RUN chown -R www-data:www-data storage bootstrap/cache
