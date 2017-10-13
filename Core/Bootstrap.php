<?php
namespace Core;

class Bootstrap {

	protected static $controllerNameSpace = 'Controllers\\';
	protected static $defaultRouter = 'Controllers\\Index';
	protected $controllerName;
	protected $url;
	function __construct() {}

	public function run() {
		if (isset($_GET['url'])) {
			$this->url = explode('/', $_GET['url']);
			$this->controllerName =  static::$controllerNameSpace . ucfirst($this->url[0]);
			switch (count($this->url)) {
				case 1:
					$this->hasController();
					break;
				case 2:
					$this->hasMethod();
					break;
				case 3:
					$this->hasParameter();
					break;
			}
		} else {
			$this->defaultRouter();
		}
	}

	protected function hasController() {
		(new $this->controllerName)->index();
	}
	protected function hasMethod() {
		(new $this->controllerName)->{$this->url[1]}();
	}
	protected function hasParameter() {
		(new $this->controllerName)->{$this->url[1]}($this->url[2]);
	}

	protected function defaultRouter() {
		(new static::$defaultRouter)->index();
	}
}