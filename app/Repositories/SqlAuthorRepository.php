<?php

namespace App\Repositories;
use App\Author;


class SqlAuthorRepository implements RepositoryInterface {

	public function getAll() {
		$authors = Author::all();
		return $authors;
	}

	public function getById($id) {
		$author = find($id);
		return $author;
	}

	public function getAuthorsBook($id) {
		$authorBooks = Author::find($id)->books;
    	return $authorBooks;
	}

	public function getByName($name) {
		$author = Author::where('name','like', $name . '%')->first();
		return $author;
	}
}