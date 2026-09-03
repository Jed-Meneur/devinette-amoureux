FROM php:8.2-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y libzip-dev libpng-dev libonig-dev libxml2-dev && docker-php-ext-install pdo_mysql zip mbstring gd
RUN a2enmod rewrite
COPY . .
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate || true
EXPOSE 80
CMD ["apache2-foreground"]