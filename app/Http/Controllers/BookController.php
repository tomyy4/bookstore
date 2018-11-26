<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;
use App\Book;

class BookController extends Controller
{

	public function __construct(BookService $bookService) {
		$this->bookService = $bookService;
	}
    public function index() {
    	return $this->bookService->getAllBooks();
    }

    public function show($id) {
    	return $this->bookService->getBookById($id);
    }
}
