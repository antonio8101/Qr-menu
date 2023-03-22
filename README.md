# QR-menu

<p align="center"><img src="https://user-images.githubusercontent.com/300245/209347209-a179fd43-8a60-4de5-ad42-41a0ad744bc3.svg" width="400" alt="Laravel Logo"></p>

## About the project

QR-menu is Web App that allows Restaurant owners to create their own menù and share it with the public with a QR code.
The project is based on laravel.

## Set up the projects

QR-menu is Web App based on ``Laravel`` and ``React framework``, so to run the project in the ``dev environment`` you must first install the dependencies of the project.

```bash
composer install
npm install
```

Provide a valid configuration for the database into .env file just created.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=qrmenudb
DB_USERNAME=user
DB_PASSWORD=password
```

Run the command :

```bash
php artisan qrmenu:init
```

Then finally all the dependencies are installed, and all initial steps are done. Then run the following commands:

```bash
npm run build
npm run privatearea-build
```

If you need to work on ``privatearea`` you must run the command:

```bash
npm run build
npm run privatearea-run
```

## QR-menu is based on Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

