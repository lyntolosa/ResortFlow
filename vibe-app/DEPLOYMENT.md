# Vibe App

Laravel 13 application configured for shared hosting without Node.js or a Vite build.

The beginner-friendly booking flow is: Home → Guest Details → Booking Confirmation.
The booking is kept in the session for this demo; it is not yet persisted to a database.

## Local installation

```bash
composer create-project laravel/laravel vibe-app
cd vibe-app
cp .env.example .env
php artisan key:generate
php artisan serve
```

Visit `http://localhost:8000` locally. The project `.env` is already configured with
MySQL placeholders and `APP_URL=http://localhost`.

## Shared-hosting deployment

1. Upload the project outside the public web directory when possible.
2. Point the domain's document root to the project's `public/` directory.
3. Copy `.env.example` to `.env`, then set the real MySQL credentials and a secure `APP_KEY`.
4. Run `composer install --no-dev --optimize-autoloader` on the server, or upload the generated `vendor/` directory.
5. Ensure `storage/` and `bootstrap/cache/` are writable by PHP.
6. If the host cannot point the document root to `public/`, use the host's Laravel/public-directory instructions rather than exposing the project root.

Tailwind is loaded from its CDN in `resources/views/home.blade.php`; no `npm install`,
`npm run build`, or Vite step is required.
