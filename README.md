## Set up project

```
git clone https://github.com/Zevik07/CakeApp.git

```
## Tạo nhánh mới với tên của mình

    ex: git branch -M trungnhan
    
## Cài nodejs, composer, mysql, php, hoặc nhanh thì tải Laragon.

## Start project admin-api

Switch to the repo folder

    cd ./CakeApp

Install all the dependencies using composer, npm

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Compile CSS
    
    npm run watch

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
