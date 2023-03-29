FROM php:8.1.6-fpm-alpine

ARG PHP_VERSION=8.1.6
RUN apk update && \
    apk add --no-cache \
        php8 \
        php8-cli \
        php8-curl \
        php8-gd \
        php8-mbstring \
        php8-mysqlnd \
        php8-pdo_mysql \
        php8-pdo_pgsql \
        php8-pdo_sqlite \
        php8-pgsql \
        php8-xml \
        php8-zip


COPY . /var/www/html

WORKDIR /var/www/html

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
