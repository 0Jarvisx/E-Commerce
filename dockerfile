# Usar una imagen base de PHP
FROM php:7.4-fpm

# Directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Copiar los archivos de tu proyecto a la imagen
COPY . .

# Instalar Composer y las dependencias de Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Exponer el puerto 9000 (usado por PHP-FPM)
EXPOSE 9000

# Comando para ejecutar el servidor PHP-FPM
CMD ["php-fpm"]
