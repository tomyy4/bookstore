<?php

namespace App\Services;
use App\Repositories\SqlAuthorRepository;

class AuthorService {


	public function __construct(SqlAuthorRepository $author) 
	{
		$this->author = $author;
	}

	public function getAllAuthors() 
	{
		return $this->author->getAll();
	}

	public function getAuthorById($id) 
	{
		return $this->author->getById($id);
	}

	public function getBooksAuthor($id) 
	{
		return $this->author->getAuthorsBook($id);
	}

	public function getAuthorByName($name) {
		return $this->author->getByName($name);
	}
	
	
}