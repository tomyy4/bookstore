<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*
Our Author routes
*/
Route::get('/authors', 'AuthorController@index');
Route::get('/author/{id}', 'AuthorController@show');
Route::post('/author/add', 'AuthorController@store');
Route::delete('/author/delete/{id}', 'AuthorController@destroy');
Route::get('author/{id}/books', 'AuthorController@books');
Route::get('authors/author/{name}', 'AuthorController@name');


/*
Our Books routes
*/

Route::get('/books', 'BookController@index');
Route::get('/book/{id}', 'BookController@show');
Route::post('/book/add', 'BookController@store');
Route::get('/books/book/{title}', 'BookController@title');
Route::delete('/book/delete/{id}', 'BookController@destroy');
