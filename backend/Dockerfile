FROM php:8.4-fpm

# Instala dependências do sistema e extensões do Postgres
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    sudo

RUN docker-php-ext-install pdo pdo_pgsql

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Cria o usuário sail
RUN groupadd -g 1000 sail && \
    useradd -m -u 1000 -g sail -s /bin/bash sail && \
    echo "sail ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers

WORKDIR /var/www

# Define o usuário sail como padrão
USER sail

# Comando para iniciar o servidor do Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000