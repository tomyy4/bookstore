<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
    	$books = Book::all();
    	return $books;
    }

    public function show($id) {
    	$book = Book::findOrFail($id);
    	return $book;
    }
}
