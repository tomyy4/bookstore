<?php

namespace App\Services;
use App\Repositories\SqlAuthorRepository;
use Illuminate\Http\Request;
use Validator;


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

	public function storeAuthor(Request $request)
	{
		$validator = Validator::make($request->all(), [
             'name' => 'required',
             'country' => 'required',
             'date_of_birth' => 'required|date'
        ]);
        
        //store the author
      
        $this->author->store($request->all());
  		return response()->json('Created succesfully');
	}

	public function getBooksAuthor($id) 
	{
		return $this->author->getAuthorsBook($id);
	}

	public function getAuthorByName($name) 
	{
		return $this->author->getByName($name);
	}

	public function deleteAuthor($id) 
	{

		$this->author->delete($id);
		return 'deleted';
	}
	
	
}