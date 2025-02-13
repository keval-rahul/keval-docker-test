FROM php:8.1-apache
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql
WORKDIR /var/www/html
COPY . /var/www/html/
RUN sed -i "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g" /etc/apache2/sites-available/000-default.conf
EXPOSE 80
CMD ["apache2-foreground"]
