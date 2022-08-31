# My Study about Laravel

# To start
## Create project command
```sh
composer create-project --prefer-dist laravel/laravel todolist
```
## Execute project command
```sh
php artisan serve
```
# Migrations
## Create  a model for migration
```sh
php artisan make:model Item -m
```
on database/migrations folder we should see now some php files.
## To run the migration
```sh
php artisan migrate
```

## List of commands launched:
- ```php artisan make:controller ItemController --resource```


## Author
Carlo Tacchella 30/08/2022
