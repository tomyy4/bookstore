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
    return view('welcome');
});


/*
Our Author routes
*/
Route::get('/authors', 'AuthorController@index');
Route::get('/author/{id}', 'AuthorController@show');
/*
Our Books routes
*/
Route::get('/books', 'BookController@index');
Route::get('/book/{id}', 'BookController@show');


