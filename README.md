# Blog Task

this task for EngazCrm 

## Installation

1- Clone the repo main branch  

```bash
git clone https://github.com/KaremMohamed0010/BlogTaskLaravel.git
```
2- Install dependency 
```bash
composer install
```
3- Generate env
```bash
cp .env.example .env
```
4- Generate key
```bash
php artisan key:generate
```
5- Change database credentials in your env

```bash
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabasePassword
```
6- run migration
```bash
php artisan migrate
```

7- install passport packange 
```bash
php artisan passport:install
```

8- run seeder 
```bash
php artisan db:seed
```
9- run the application
```bash
php artisan serve
```

## Usage
1- create  
```bash
composer install
```

## Usage
now you can use the app via the postman collection located in collection folder in the repo.
