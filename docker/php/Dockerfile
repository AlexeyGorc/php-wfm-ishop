FROM php:8.3-fpm-alpine

# Системные зависимости
RUN apk add --no-cache \
    bash \
    git \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    zlib-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libxml2-dev \
    openssl \
    autoconf \
    gcc \
    g++ \
    make \
    linux-headers

# Установка PHP-расширений
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    intl \
    zip \
    bcmath \
    opcache

# Установка и включение Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Настройки PHP
COPY docker/php/php.ini /usr/local/etc/php/

WORKDIR /var/www/html