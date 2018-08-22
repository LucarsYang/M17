FROM php:7.2-fpm
RUN pecl install redis \
&& pecl install xdebug \
&& docker-php-ext-enable redis \
&& docker-php-ext-enable xdebug \
&& docker-php-ext-install pdo_mysql
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev