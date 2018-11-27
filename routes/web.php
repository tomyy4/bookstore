<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello World!';
});


/*
Our Author routes
*/
Route::get('/authors', 'AuthorController@index');
Route::get('/author/{id}', 'AuthorController@show');
Route::post('/author/add', 'AuthorController@store');
Route::get('author/{id}/books', 'AuthorController@books');
Route::get('authors/author/{name}', 'AuthorController@name');


/*
Our Books routes
*/

Route::get('/books', 'BookController@index');
Route::get('/book/{id}', 'BookController@show');
Route::get('/books/book/{title}', 'BookController@title');


