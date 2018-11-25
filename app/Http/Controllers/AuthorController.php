<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthorService;
use App\Author;

class AuthorController extends Controller
{
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index() 
    {
        return $this->authorService->getAllAuthors();
    }

    public function show($id)
    {
    	return $this->authorService->getAuthorById($id);
    }

    public function books($id) 
    {
    	return $this->authorService->getBooksAuthor($id);
    }
}
