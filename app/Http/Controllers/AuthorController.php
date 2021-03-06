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

    public function store(Request $request) 
    {
        return $this->authorService->storeAuthor($request);
    }

    public function destroy($id) 
    {
        return $this->authorService->deleteAuthor($id);
    }

    public function books($id) 
    {
    	return $this->authorService->getBooksAuthor($id);
    }

    public function name($name)
    {
        return $this->authorService->getAuthorByName($name);
    }
}
