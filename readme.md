# Laravel-Vue-SPA Medical System

This repository is contains a web based application built by Laravel and Vue js.



## Prerequiries

- PHP 7
- Composer
- NodeJs
- MySQL

## Installation

- Clone the repository
- Installer back dependencies with `composer install`
- Install front dependencies with `npm install`
- Run `npm audit fix` to fix all exisitng packages
- Copy file `.env.example` in `.env` and add following informations:
    - Database credentials (`DB_HOST`, `DB_PORT`, ...)
    - Application url (`APP_URL`). Either virtual host address if you configure one, either address form the command `php artisan serve`
- Generate application key with `php artisan key:generate`
- Launch migrations with `php artisan migrate`.
- Seed to the database with `php artisan db:seed` to add all the departments and dummy users.
- Clear cache by running `php artisan config:cache`
- Build front with `npm run watch`

If you did'nt set a virtual host, launch application with the `php artisan serve` command. By default, application will be served at `http://127.0.0.1:8000`

## Configuration

You can change the database credentials in the `.env` file.


## Usage

Log in to department e.g   `department@mail.com:department`
For example to log in as receptionist we use `reception@mail.com` password : `reception`
 treatment we use `treatment@mail.com` password : `treatment` e.t.c

 Other Departments include
 - `radiology`
 - `optical`
 - `nursing`
 - `laboratory`

 ## Testing

 Run phpunit as follows

 vendor/bin/phpunit --filter methodName

 e.g `vendor/bin/phpunit --filter only_logged_in_users_can_access_the_respective_departments`

 ## Conclusion
 - I was unable to implement the search functionality for reports
 - Also was unable to implement report download to PDF
