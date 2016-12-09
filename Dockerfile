## pull base image
FROM alpine:3.3

## copy modified PHP files into container
COPY . /pimf-haanga

## set working directory
WORKDIR /pimf-haanga

# get packages
RUN apk update && \
    apk upgrade && \
    apk add tzdata && \
    apk add php-fpm && \
    apk add php-common && \
    apk add php-bcmath && \
    apk add php-ctype && \
    apk add php-curl && \
    apk add php-dom && \
    apk add php-json && \
    apk add php-openssl && \
    apk add php-pdo && \
    apk add php-pdo_sqlite && \
    apk add php-pdo_mysql && \
    apk add php-cli && \
    apk add php-phar && \
    apk add php-pcntl && \
    apk add php-intl && \
    apk add php-zlib && \
    apk add openssh && \
    apk add openssl && \
    apk add supervisor && \
    apk add git && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

# initialize the PIMF application
RUN php pimf core:init

## Install Haanga template engine
RUN cd Haanga/ && \
    curl -s http://getcomposer.org/installer | php && \
    php composer.phar update && \
    php composer.phar install && \
    php composer.phar dump-autoload --optimize && \
    cd ../

# expose the external port
EXPOSE 1337

# run the PHP's built-in web server
ENTRYPOINT php -S 0.0.0.0:1337
