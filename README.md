# freelancer-portfolio

A Laravel-powered freelance portfolio site — Home, About, Skills, Projects,
Testimonials, and Contact, each served from its own route and Blade view.

## Requirements

- PHP 8.2+
- Composer

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Then visit `http://localhost:8000`.

## Structure

- `routes/web.php` — one named route per page (`home`, `about`, `skills`,
  `projects`, `testimonials`, `contact`)
- `app/Http/Controllers/PageController.php` — resolves each route to a view,
  with the page content (skills, projects, testimonials) passed in as data
- `resources/views/layouts/app.blade.php` — shared header/nav/footer layout
- `resources/views/pages/*.blade.php` — one view per page
- `public/css/styles.css`, `public/js/script.js` — shared styling (light/dark
  aware, responsive) and the mobile nav toggle
