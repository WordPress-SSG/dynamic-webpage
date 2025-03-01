FROM debian

ARG DEBIAN_FRONTEND=noninteractive

EXPOSE 80 443

WORKDIR /var/www/html

# Install required system packages
RUN apt-get update && apt-get install -y \
    php \
    php-fpm \
    php-mbstring \
    php-xml \
    php-curl \
    wget \
    curl \
    unzip \
    zip \
    libcurl4-openssl-dev \
    libxml2-dev \
    libonig-dev && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Install WP-CLI
RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x /usr/local/bin/wp

# Download and extract WordPress directly
RUN wp --allow-root core download https://wordpress.org/wordpress-5.9.5.tar.gz
