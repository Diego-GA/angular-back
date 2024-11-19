FROM php:8.2-fpm
ARG USER_ID
ARG GROUP_ID
ARG USER_NAME
ARG GROUP_NAME
ENV TZ=America/Mexico_City
WORKDIR /var/www/html
RUN groupadd -g $GROUP_ID $GROUP_NAME && \
    useradd -u $USER_ID -g $GROUP_ID -m $USER_NAME
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    unzip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git \
    curl \
    libpq-dev \
    tzdata \
    htop
RUN docker-php-ext-install zip pgsql pdo pdo_pgsql gd
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./laravel .
RUN composer install --no-ansi --no-dev --no-interaction --no-progress --optimize-autoloader --no-scripts
RUN chown -R $USER_NAME:$GROUP_NAME /var/www/html/
USER $USER_NAME