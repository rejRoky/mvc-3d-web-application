FROM php:7.4-apache

# Install necessary extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the Apache configuration file
COPY ./config/apache2.conf /etc/apache2/sites-available/000-default.conf

# Copy the app files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

EXPOSE 80
