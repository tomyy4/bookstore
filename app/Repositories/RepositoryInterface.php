<?php

namespace App\Repositories;

interface RepositoryInterface {

	public function getAll();
	public function getById($id);
	public function store(array $data);
	public function delete($id);
}