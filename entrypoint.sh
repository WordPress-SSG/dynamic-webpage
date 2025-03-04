#!/bin/bash
set -xe

echo "Starting entrypoint script..."

# Ensure required services are stopped before starting
service php8.2-fpm stop || true
service lighttpd stop || true

# Ensure correct permissions for Lighttpd
echo "Setting file permissions..."

# Check if SSL directory exists
SSL_DIR="/etc/lighttpd/ssl"
if [ ! -d "$SSL_DIR" ]; then
    mkdir -p "$SSL_DIR"
fi

# Check and generate self-signed certificate if missing
if [ ! -f "$SSL_DIR/server.pem" ]; then
    echo "Generating self-signed SSL certificate..."
    openssl req -x509 -newkey rsa:4096 -keyout "$SSL_DIR/server.key" -out "$SSL_DIR/server.crt" -days 365 -nodes -subj "/CN=localhost"
    cat "$SSL_DIR/server.key" "$SSL_DIR/server.crt" > "$SSL_DIR/server.pem"
    chmod 600 "$SSL_DIR/server.pem"
fi

# Check and generate self-signed CA file if missing
if [ ! -f "$SSL_DIR/ca.pem" ]; then
    echo "Generating self-signed CA certificate..."
    cp "$SSL_DIR/server.crt" "$SSL_DIR/ca.pem"
fi

# Start PHP-FPM service
echo "Starting PHP-FPM..."
service php8.2-fpm start

# Start Lighttpd web server
echo "Starting Lighttpd..."
service lighttpd start

echo "Container is ready! WordPress is running." | tee -a /var/log/lighttpd/error.log | tee -a /var/log/lighttpd/access.log

# Keep container running
tail -f /var/log/lighttpd/error.log /var/log/lighttpd/access.log
