<h1 align="center">Simple Bulletin Board</h1>

<p align="justify">A functional CRUD web app built during the coding exam Part-I.</p>
•   Author: <a href="https://abby2727.github.io/my-portfolio/"> Abdul Pangandaman </a> <br>
•   Twitter: <a href="https://twitter.com/abby_2727"> @abby_2727 </a> <br>
•   Instagram: <a href="https://www.instagram.com/abbyyyyys_/"> @abbyyyyys_ </a> <br>

## Requirement
•   PHP 8.0.2 or higher

## Installation
Setting up your development environment on your local machine:
```
git clone https://github.com/abby2727/interview-app.git
cd interview-app
composer install
php artisan key:generate
php artisan migrate
php artisan optimize
php artisan serve
```
## Before Starting

Create Database and Set-up db credential on .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=interview_app
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
