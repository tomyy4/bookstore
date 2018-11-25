<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index() {
    	$authors = Author::all();
    	return $authors;
    }

    public function show($id) {
    	$author = Author::findOrFail($id);
    	return $author;
    }

    public function books($id) {
    	$authorBooks = Author::find($id)->books;
    	return $authorBooks;
    	//return $authorBooks;
    }
}
