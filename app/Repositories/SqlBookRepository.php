<?php

namespace App\Repositories;
use App\Book;


class SqlBookRepository implements RepositoryInterface 
{

	public function getAll() 
	{
		$books = Book::all();
		return $books;
	}

	public function getById($id) 
	{
		$book = find($id);
		return $book;
	}

	
}