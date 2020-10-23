<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

Project ini ditujukan untuk menyelesaikan tugas dari rangkaian reqrutmen bigio.id
dimana pada aplikasi ini terdapat 3 user dengan rolenya masing masing yaitu : 
 - Admin
 - Pengunjung
 - Surveyor

## User Demo
Akun user untuk demo aplikasi antara lain :
 - Admin 
```sh
email : admin@email.test
password : admin
```
 - Pengunjung 
```sh
email : pengunjung@email.test
password : pengunjung
```
 - Surveyor  
```sh
email : surveyor@email.test
password : surveyor
```

## Installation Guide

1. install composer dependencies
```sh
$ composer install
```

2. install NPM dependencies
```sh
$ npm install
```

3. Create a copy of your .env file
```sh
$ cp .env.example .env
```
4. create empty database 
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

5. migrate the database
```sh
$ php artisan migrate
```

6. seed the database
```sh
$ php artisan db:seed
```

7. start the app
```sh
$ php artisan serve
```
