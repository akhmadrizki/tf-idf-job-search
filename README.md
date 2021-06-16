# Job Search with TF-IDF
> Build based on [Laravel v8](https://laravel.com)
> With Sail

## Prerequisites

- PHP (8)

## Setup
1. Clode this repository
```sh
$ git clone https://github.com/akhmadrizki/tf-idf-job-search.git
```
2. Install all package
```sh
$ composer install
```

## Running the app

```sh
$ alias sail='bash vendor/bin/sail'
```
then
```sh
$ sail up -d
```

- Run this command:
```sh
$ sail composer dump-autoload
$ php artisan migrate:fresh --seed
```
