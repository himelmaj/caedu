# Getting started

## Installation

Clone the repository

    git clone https://github.com/himelmaj/caedu.git

Switch to the repo folder

    cd caedu/

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed



Start the local development server

    php artisan serve
    npm i
    npm run dev

You can now access the server at http://localhost:8000

Defaults User:

    admin@example.com 
    student@example.com 
    teacher@example.com


    password:secret 

    