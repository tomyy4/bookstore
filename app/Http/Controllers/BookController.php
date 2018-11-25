<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RepositoryInterface;
use App\Book;

class BookController extends Controller
{

	public function __construct(RepositoryInterface $bookRepository) {
		$this->bookRepository = $bookRepository;
	}
    public function index() {
    	return $this->bookRepository->all();
    }

    public function show($id) {
    	return $this->bookRepository->getById($id);
    }
}
