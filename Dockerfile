FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js from NodeSource (lighter)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create storage symlink
RUN php artisan storage:link || true

# Install Node dependencies
RUN npm install

# Build frontend assets
RUN npm run build

# Laravel setup
RUN cp .env.example .env || true
RUN php artisan key:generate || true

# Expose Railway port
EXPOSE 8080

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}