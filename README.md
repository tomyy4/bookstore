### Prerequisites

- Composer
If you are not using Homestead, you will need to make sure your server meets the following requirements:

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension



### Installing

- Install Laravel with composer: "composer global require laravel/installer"
- Clone this repo.
- Go to .env file and check the database name. You can change it to whatever you want. Just make sure you create the database.
- run "php artisan migrate"
- Go to your project and run "php artisan db:seed" to get some data in your database.
- run "php artisan serve"


### Endpoints

Authors:
- api/authors
- api/author/{id}
- api/authors/author/books

Books:
- api/books
- api/book/{id}
- api/books/book/{title}

You can check all the routes in the api.php file.
