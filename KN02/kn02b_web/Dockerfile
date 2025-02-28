# PHP mit Apache verwenden
FROM php:8.0-apache  

# MySQL-Erweiterung installieren
RUN docker-php-ext-install mysqli  

# PHP-Dateien in den Apache-Ordner kopieren
COPY info.php /var/www/html/  
COPY db.php /var/www/html/  

# Port 80 für externe Verbindungen freigeben
EXPOSE 80
