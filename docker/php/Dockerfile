FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl libpq-dev unzip && \
    docker-php-ext-install pdo pdo_mysql && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

CMD ["php-fpm"]
