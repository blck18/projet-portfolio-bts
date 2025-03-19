FROM php:8.1-apache

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Activation du module rewrite d'Apache
RUN a2enmod rewrite

# Configuration PHP
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Nettoyage
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
