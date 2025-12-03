# Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Installer les extensions nécessaires pour MySQL et PDO
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Activer mod_rewrite pour Apache (utile si tu utilises des routes)
RUN a2enmod rewrite

# Copier ton code source dans le conteneur
COPY . /var/www/html/

# Définir le répertoire de travail
WORKDIR /var/www/html/

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
