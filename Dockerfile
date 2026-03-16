FROM php:8.4-fpm AS php-base

WORKDIR /var/www/html

# Install system dependencies (including sqlite for pdo_sqlite)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libonig-dev \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    libxml2-dev \
    libsqlite3-dev \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        xml \
        intl \
        zip \
        gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files and install PHP dependencies (without running scripts)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

# Copy application code
COPY . .

# Ensure storage and bootstrap/cache are writable
RUN chmod -R ug+rwx storage bootstrap/cache

# Remove any pre-generated cached services/packages from the repo (may reference dev-only providers)
RUN rm -f bootstrap/cache/*.php || true

# Build frontend assets using Node in a separate stage
FROM node:20-alpine AS node-build
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

# Final image with Nginx + PHP-FPM in a single container
FROM php:8.4-fpm AS app

WORKDIR /var/www/html

# Install Nginx, Supervisor, and PHP extensions (including sqlite for pdo_sqlite)
RUN apt-get update && apt-get install -y \
    nginx \
    supervisor \
    libonig-dev \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    libxml2-dev \
    libsqlite3-dev \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        xml \
        intl \
        zip \
        gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy PHP configuration
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy application code from build stage
COPY --from=php-base /var/www/html /var/www/html

# Copy built frontend assets
COPY --from=node-build /app/public /var/www/html/public

# Copy Nginx configuration
COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf

# Supervisor configuration
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Entrypoint (creates docker-friendly .env if none is provided)
COPY docker/php/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Expose HTTP port
EXPOSE 80

# Healthcheck (basic)
HEALTHCHECK --interval=30s --timeout=5s --start-period=30s CMD curl -f http://localhost/ || exit 1

# Start Supervisor which runs both php-fpm and nginx
ENTRYPOINT ["/entrypoint.sh"]
CMD ["supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]


