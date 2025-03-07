FROM php:8.4.3-cli

# Install necessary dependencies
RUN apt-get update -y && apt-get install -y \
    libsqlite3-dev \
    libonig-dev \
    zip unzip git curl \
    nodejs npm \
    supervisor \
    && docker-php-ext-install pdo pdo_sqlite mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy application files into the container
COPY . /app

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Install NPM dependencies, including Vite
RUN npm install

# Expose the ports that the app will use
EXPOSE 8000 5173

# Create supervisord configuration file
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Start supervisord in the container
CMD ["/usr/bin/supervisord"]
