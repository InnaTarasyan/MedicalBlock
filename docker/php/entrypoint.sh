#!/usr/bin/env sh
set -eu

cd /var/www/html

# Clear any pre-generated caches that might reference dev-only providers
rm -f bootstrap/cache/*.php 2>/dev/null || true

# If the user didn't mount/provide their own .env, use a safe docker default.
if [ ! -f ".env" ]; then
  if [ -f "docker/php/env.docker" ]; then
    cp docker/php/env.docker .env
  fi
fi

# Ensure sqlite file exists (when using sqlite) and storage is writable.
mkdir -p \
  storage \
  storage/framework/cache \
  storage/framework/sessions \
  storage/framework/views \
  bootstrap/cache \
  database
touch database/database.sqlite
chmod -R ug+rwx storage bootstrap/cache database || true
# Make sure the runtime user can write (php-fpm/nginx run as www-data)
chown -R www-data:www-data storage bootstrap/cache database 2>/dev/null || true

# Ensure APP_KEY exists (needed for cookies/sessions). Generate if missing.
if command -v php >/dev/null 2>&1 && [ -f artisan ]; then
  php artisan package:discover --ansi >/dev/null 2>&1 || true
  if [ -f ".env" ] && ! grep -q '^APP_KEY=' .env; then
    printf '\nAPP_KEY=\n' >> .env
  fi
  if ! php -r 'exit((bool)getenv("APP_KEY") || (file_exists(".env") && preg_match("/^APP_KEY=.*/m", file_get_contents(".env")) && !preg_match("/^APP_KEY=\\s*$/m", file_get_contents(".env"))) ? 0 : 1);'; then
    php artisan key:generate --force >/dev/null 2>&1 || true
  fi

  # If we're using sqlite by default, run migrations so the app can start.
  php artisan migrate --force >/dev/null 2>&1 || true
fi

exec "$@"


