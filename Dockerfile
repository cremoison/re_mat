FROM php:8.4-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install dependencies
RUN apt-get update && apt-get install -y curl bash unzip git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Set the working directory
WORKDIR /var/www/html

COPY . .

# Install PHP and JS dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80