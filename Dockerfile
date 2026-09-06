FROM php:8.2-apache
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y libzip-dev libpng-dev libonig-dev libxml2-dev libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql zip mbstring gd

RUN a2enmod rewrite

# CORRECTION ICI : on dit à Apache d'utiliser le dossier public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . .
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
CMD ["apache2-foreground"]