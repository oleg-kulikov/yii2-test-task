FROM composer:2.7 AS builder
FROM php:8.1-cli-alpine

RUN apk add --no-cache linux-headers libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY --from=builder /usr/bin/composer /bin

WORKDIR /app
