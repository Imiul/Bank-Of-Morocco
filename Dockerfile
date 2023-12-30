FROM php:8.2-apache

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*