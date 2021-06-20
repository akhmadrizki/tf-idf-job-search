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
2. Install all package (Make sure Docker integrated to WSL2 if you're in windows, please check: https://docs.docker.com/docker-for-windows/wsl/#install)
```sh
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
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
