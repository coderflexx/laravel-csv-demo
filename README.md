## Introduction
This project demo is to demonstrate on how [laravel-csv](https://github.com/coderflexx/laravel-csv) works

# Installation

Clone the repo

```bash
git clone https://github.com/coderflexx/laravel-csv-demo
```

Install the dependecies
```bash
composer install
npm install
npm run dev
```

Copy the `.env` file
```
cp .env.example .env
```

Generate a new key
```bash
php artisan key:generate
```
Then

```bash
php artisan migrate --seed
```

Access the app
__Email__: test@example.com
__Password__: password

__NOTE__: This project is using `sqlite` by default, if you want to switch to `mysql` or any DB driver, you may change the driver from the `.env` file.

This project uses `redis` as a queue driver, if you want to change it, you may change your `.env` file configuration as well, or install redis in your local machine.