FROM php:7.1-fpm
RUN pecl install redis \
&& pecl install xdebug \
&& docker-php-ext-enable redis \
&& docker-php-ext-enable xdebug \
&& docker-php-ext-install pdo_mysql
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
&& docker-php-ext-install mcrypt \
&& docker-php-ext-enable mcrypt