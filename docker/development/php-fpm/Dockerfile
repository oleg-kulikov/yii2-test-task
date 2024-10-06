FROM php:8.1-fpm-alpine

RUN apk add --no-cache linux-headers fcgi libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

WORKDIR /app
