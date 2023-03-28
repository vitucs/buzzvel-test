FROM php:8.1.6-fpm-alpine

RUN apk add --no-cache \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql zip

COPY . /var/www/html

WORKDIR /var/www/html

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
