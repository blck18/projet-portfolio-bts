FROM php:8.1-apache

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo pdo_mysql

# Activation des modules Apache nécessaires
RUN a2enmod rewrite headers deflate expires

# Configuration PHP
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Nettoyage
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Copie des fichiers du projet
COPY src/ /var/www/html/

# Configuration des permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 644 /var/www/html/.htaccess

# Exposer le port 80
EXPOSE 80
