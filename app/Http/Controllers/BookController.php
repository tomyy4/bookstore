<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
    	return 'all books';
    }

    public function show($id) {
    	return 'book with id ' . $id;
    }
}
