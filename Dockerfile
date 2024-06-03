# Use an official PHP runtime as the base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the contents of the project directory to the working directory in the container
COPY . .

# Expose port 80 to allow external access to the web server
EXPOSE 80
