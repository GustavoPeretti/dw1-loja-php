FROM php:8.5-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/zz-xdebug.ini

RUN a2enmod rewrite

WORKDIR /var/www/html
