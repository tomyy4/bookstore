<?php

namespace App\Services;
use App\Repositories\SqlBookRepository;
use Illuminate\Http\Request;
use Validator;

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

	
	public function storeBook(Request $request)
	 {
		$validator = Validator::make($request->all(), [
             'title' => 'required',
             'sinposis' => 'required',
             'published_in' => 'required|date',
             'img' => 'required',
             'author_id' => 'required|integer'
        ]);
        
        //store the book
      
        $this->book->store($request->all());
  		return response()->json('Created succesfully');
	}
	public function getBookByTitle($title) 
	{
		if (!$title) {
			return 'Book Does not exist';
		}
		return $this->book->getByTitle($title);
	}
	
	
}