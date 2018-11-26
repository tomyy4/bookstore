<?php

namespace App\Services;
use App\Repositories\SqlBookRepository;

class BookService {


	public function __construct(SqlBookRepository $book) {
		$this->book = $book;

	}

	public function getAllBooks() 
	{
		return $this->book->getAll();
	}

	public function getBookById($id) 
	{
		return $this->book->getById($id);
	}

	
	public function getBookByTitle($title) {
		return $this->book->getByTitle($title);
	}
	
	
}