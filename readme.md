# Anagram Project

## Installation

### Docker
- Copy file `.env.example` to `.env`
- Run `docker-compose up -d` command
- Enter the `anagram_workspace` container
```
docker exec -it anagram_workspace /bin/bash
```
- Install project dependencies
```
composer install
```
- Run migration
```
php artisan migrate
```
- Generate application encryption key
```
php artisan key:generate
```
- Run Project: http://anagram.dev:8080/
