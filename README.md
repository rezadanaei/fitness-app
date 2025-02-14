````markdown
# Fitness App

This project is a fitness application designed to track workouts and their status.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  <a href="https://github.com/rezadanaei/fitness-app/actions"><img src="https://github.com/rezadanaei/fitness-app/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Prerequisites

Before you begin, make sure you have the following tools installed:

-   [PHP](https://www.php.net/)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/)
-   [Git](https://git-scm.com/)

## Setting Up the Project

After cloning the project, navigate to the project folder and follow the steps below:

### 1. Install PHP Dependencies

First, install the PHP dependencies using Composer:

```bash
composer install
```
````

### 2. Set Up the `.env` File

To set up the project, you need to configure your `.env` file. Copy the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

Then, set the necessary environment variables like `DB_CONNECTION`, `APP_KEY`, and other configurations.

### 3. Generate Application Key

To generate the application key, run:

```bash
php artisan key:generate
```

### 4. Database Migrations

To create the database tables, run:

```bash
php artisan migrate
```

### 5. Set Up Storage Symbolic Link

Since uploaded files are stored in the `public` directory of the `storage` folder, you need to create a symbolic link to make them accessible. Run the following command:

```bash
php artisan storage:link
```

This command will create a symbolic link from `public/storage` to `storage/app/public`, allowing you to access the uploaded files through the public URL.

### 6. Run the Project

Once everything is set up, you can start the development server by running:

```bash
php artisan serve
```

After running this command, you can access the project in your browser at `http://localhost:8000`.

## Additional Notes

-   If you are using Windows, be sure to use XAMPP or WAMP to run PHP.
-   You can test the API using tools like Postman or Insomnia.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the project! You can find the contribution guidelines in the documentation. Please make sure to follow the process outlined in the project before submitting any pull requests.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to the project maintainer via [email@example.com](mailto:email@example.com). All security vulnerabilities will be promptly addressed.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```

```
