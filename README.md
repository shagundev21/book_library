<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Step to install
Setup Instructions
1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/shagundev21/book_library.git
cd book-api
2. Install Dependencies
Ensure you have Composer installed on your system. If not, you can install it from here.

Run the following command to install all required dependencies:

bash
Copy
Edit
composer install
3. Set Up Environment Variables
Copy the .env.example file to .env:

bash
Copy
Edit
cp .env.example .env
Edit the .env file to set up your database configuration. Make sure to configure the MySQL database connection:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_library
DB_USERNAME=root
DB_PASSWORD=
4. Generate the Application Key
Run the following command to generate the application key:

bash
Copy
Edit
php artisan key:generate
5. Run Database Migrations
Run the migrations to create the books table:

bash
Copy
Edit
php artisan migrate
6. Start the Development Server
Start the Laravel development server:

bash
Copy
Edit
php artisan serve
The API will now be available at http://127.0.0.1:8000.

Running Tests
To ensure everything is working correctly, you can run the tests included in the project.

First, make sure to run the database migrations for the testing environment:

bash
Copy
Edit
php artisan migrate --env=testing
Then, run the PHPUnit tests:

bash
Copy
Edit
php artisan test