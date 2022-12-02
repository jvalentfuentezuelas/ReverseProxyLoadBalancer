FROM php:8.1-apache
RUN apt-get -y update && apt-get -y upgrade
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql
WORKDIR /var/www/html
