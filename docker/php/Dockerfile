FROM php:7.4-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy Apache vhost file to proxy php requests to php-fpm container
COPY docker/apache2.conf /etc/apache2/sites-available/000-default.conf
