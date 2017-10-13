<?php
namespace Models;
use Core\Model;

class User extends Model {

	protected $table = 'users';

	public function getAll()
	{
		return $this->all();
	}

	public function get($id)
	{
		return $this->find($id);
	}

}