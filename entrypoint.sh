#!/bin/bash
set -xe

echo "Starting entrypoint script..."

# Ensure required services are stopped before starting
service php8.2-fpm stop || true
service lighttpd stop || true

# Ensure correct permissions for Lighttpd
echo "Setting file permissions..."

# Start PHP-FPM service
echo "Starting PHP-FPM..."
service php8.2-fpm start

# Start Lighttpd web server
echo "Starting Lighttpd..."
service lighttpd start

echo "Container is ready! WordPress is running."

# Keep container running
tail -f /dev/null
