# BC - HRIS

## Clone the HRIS repo from github

```
git clone git@github.com:pynsbal/BC_hris_capstone.git

```

## Installation

-   Copy .env.example
-   Rename to .env
-   Update code

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bc_hris
DB_USERNAME=root
DB_PASSWORD=

```

```
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

run - php artisan serve

```

```
- npm install

run - npm run dev

```

## Temporary Credential

```
email: bc_admin@gmail.com
password: admin123
```
