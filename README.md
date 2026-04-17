# EDBS Company Website

A modern, dynamic company website built with Laravel, featuring sections for hero banners, company information, team profiles, products, client testimonials, and appointment scheduling.

## Features

- **Hero Section**: Dynamic banners with achievements, headings, and video support
- **Company About**: Detailed company information with keypoints
- **Our Team**: Team member profiles and information
- **Products**: Showcase company products and services
- **Testimonials**: Client feedback and reviews
- **Project Clients**: Display client projects and partnerships
- **Appointments**: Contact form for scheduling appointments
- **Statistics**: Company metrics and achievements
- **User Management**: Authentication and role-based permissions using Spatie Laravel Permission

## Technologies Used

- **Backend**: Laravel 12.0 (PHP 8.2+)
- **Frontend**: Tailwind CSS, Alpine.js
- **Build Tool**: Vite
- **Database**: MySQL/PostgreSQL (via Laravel migrations)
- **Authentication**: Laravel Breeze
- **Permissions**: Spatie Laravel Permission

## Installation

1. Clone the repository:

    ```bash
    git clone <repository-url>
    cd EDBSsite
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

4. Set up environment:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Run database migrations:

    ```bash
    php artisan migrate
    ```

6. (Optional) Seed the database:

    ```bash
    php artisan db:seed
    ```

7. Build assets:
    ```bash
    npm run build
    ```

## Usage

### Development

Run the development server with hot reloading:

```bash
composer run dev
```

This will start:

- Laravel server on `http://localhost:8000`
- Queue worker
- Log monitoring
- Vite dev server for frontend assets

### Production

Build assets for production:

```bash
npm run build
```

Deploy using your preferred method (e.g., Laravel Forge, Heroku, etc.).

## Project Structure

- `app/Models/`: Eloquent models for database entities
- `app/Http/Controllers/`: Controllers for handling requests
- `resources/views/`: Blade templates
- `routes/`: Route definitions
- `database/migrations/`: Database schema migrations
- `public/`: Public assets

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests: `php artisan test`
5. Submit a pull request

## License

This project is licensed under the MIT License.
