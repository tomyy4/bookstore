<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
    	return 'all authors';
    }

    public function show($id) {
    	return 'author with id ' . $id;
    }
}
