## My Base Application for Laravel 5.2 with Multi-auth

This base application will be a starting point in creating a web app from scratch with multiple authentication - admin user (Employees) and frontend user (customer).

Requirements:
- [Laravel 5.2 requirements](https://laravel.com/docs/5.2/installation#installation)
- [NodeJs](https://nodejs.org/en/download/)
- [Bower](http://bower.io/#install-bower)
- [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
- [Composer](https://getcomposer.org/download/)

How to install
- Clone this project. `git clone git@github.com:jsdecena/baseapp2.git`
- Run `composer install`
- Copy .env.example and save as .env on the same directory
- Run `php artisan key:generate`
- [IMPORTANT] Create you local DB and change the database settings in the .env with your database settings
- Run `php artisan migrate --seed`
- Run `npm install`
- Run `php artisan serve` and go to [localhost:8000](http://localhost:8000)

Admin Employee credentials:

- email: jane@doe.com.com
- pass: Testing123

Customer credentials:

- email: john@doe.com
- pass: Testing123
