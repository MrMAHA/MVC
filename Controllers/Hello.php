<?php
namespace Controllers;
use Models\User;
use Core\Controller;

class Hello extends Controller {

	public function index()
	{
		var_dump(__METHOD__);
	}

	public function to($name='')
	{
		// var_dump((new User)->getAll());
		// var_dump((new User)->find(2));
		// var_dump("Hello to $name");
		$users = (new User)->getAll();
		$this->view->render('hello', compact('users'));
	}


}