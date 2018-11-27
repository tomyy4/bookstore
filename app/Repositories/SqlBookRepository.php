<?php

namespace App\Repositories;
use App\Book;


class SqlBookRepository implements RepositoryInterface 
{

	public function getAll() 
	{
		// $books = Book::with(array('author'=>function($query){
  //       	$query->select('name');
  //   	}))->get();

    	$books = Book::with('author')->get();

    	return $books;

	}

	public function getById($id) 
	{
		$book = Book::find($id);
		return $book;
	}

	public function store(array $data)
	{
		$book = Book::create($data);
	}

	public function getByTitle($title) 
	{
		$book = Book::where('title','like', $title .'%')->first();
		return $book;
	}

	
}