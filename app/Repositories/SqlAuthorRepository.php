<?php

namespace App\Repositories;
use App\Author;


class SqlAuthorRepository implements RepositoryInterface {

	public function getAll() 
	{
		$authors = Author::with('books')->get();
		return $authors;
	}

	public function getById($id)
	 {
		$author = Author::find($id);
		return $author;
	}

	public function store(array $data) {
		$author = Author::create($data);
	}

	public function getAuthorsBook($id) 
	{
		$authorBooks = Author::find($id)->books;
    	return $authorBooks;
	}

	public function getByName($name) 
	{
		$author = Author::where('name','like', $name . '%')->first();
		return $author;
	}

	public function delete($id) 
	{
		$author = Author::findOrFail($id);
		$author->delete();
	}
}