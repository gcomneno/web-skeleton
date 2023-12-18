# Usa l'immagine ufficiale di PHP 7.3
FROM php:7.3-fpm

# Installa le estensioni PHP necessarie
RUN docker-php-ext-install mbstring

# Installa XDebug
RUN pecl install xdebug-3.0.1 && docker-php-ext-enable xdebug
