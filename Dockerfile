FROM php:8.1.6-fpm-alpine

# Configuração do PHP
ARG PHP_VERSION=8.1.6
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        php${PHP_VERSION} \
        php${PHP_VERSION}-cli \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-mysql \
        php${PHP_VERSION}-pgsql \
        php${PHP_VERSION}-sqlite3 \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-zip


COPY . /var/www/html

WORKDIR /var/www/html

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
