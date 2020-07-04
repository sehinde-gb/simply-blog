<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel 6 

This project uses Laravel 6

## Basic Installation

### This project has been developed using the Laravel Valet environment 

## Requirements


You will need to create a simple blog application using Laravel. Please ensure your blog has the following functionality.

1.	All users’ blogs are publicly visible.
2.	Users must register an account to be able to create their own blog posts and leave comments.
3.	Registered users can only edit and delete their own blog posts.
4.	A blog post must include post title and body.

Submission rules

1.	You will have two days to complete the code challenge.
2.	Please ensure all code is meets PSR12 standards (https://www.php-fig.org/psr/psr-12/).
3.	Please have your code in a public repository either on GitHub or BitBucket.

### Database Schema
This project uses Laravel 6 BigInt values instead of Integer values as defined in the database schema that was provided.

git clone https://github.com/sehinde-gb/simply-blog.git

cd simply-blog

## Composer Install
Run composer install to ensure that Laravel knows what packages to use.

## Key Generation
To generate your application key type the following command

php artisan key:generate

## Databases

Create a MYSQL database using mysql -u root and provide a name for your SQL database.

Amend your env file so that it reflects the name of your newly added database name above.

php artisan migrate --seed to create and populate tables

Check to see if your tables have migrated successfully using your sql software application

## Browser Test
Within our example we are using the Laravel Valet environment and we would suggest that you browse to 
http://simply-blog.test/

or 

https://simply-blog.test/


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
