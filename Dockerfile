# Dockerfile

# Use the official PHP image
FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /var/www/html

# Copy the PHP files to the container
COPY .

# Expose port 80 for the Apache server
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
