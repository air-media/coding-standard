FROM php:7.1-cli-alpine

RUN set -xe \
    && apk add --no-cache --virtual .composer-rundeps \
        git \
        openssh-client \
        libzip-dev \
        zip \
        unzip \
    && docker-php-ext-configure zip --with-zip \
    && docker-php-ext-install zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
