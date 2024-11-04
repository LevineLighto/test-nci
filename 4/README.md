# Test NCI Task 4
Simple CRUD API

Using Laravel 11 and MySQL

## Installation
Please run the following commands
```bash
composer install
cp .env.example .env
```

Adjust database setups on .env according to your database credentials
```env
DB_CONNECTION=mysql
DB_HOST=<YOUR_DB_HOST> # e.g 127.0.0.1
DB_PORT=<YOUR_DB_PORT> # e.g 3306
DB_DATABASE=<YOUR_DB_NAME>
DB_USERNAME=<YOUR_DB_USERNAME>
DB_PASSWORD=<YOUR_DB_PASSWORD>
```

And please run this command
```bash
php artisan migrate
```

## Postman example
I also included postman example to test this API [here](test.postman_collection.json)

Please adjust the DOMAIN global variable before doing any testing
