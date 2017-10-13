<?php
namespace Core;
use PDO;

class DB extends PDO {
	function __construct() {
		return parent::__construct('mysql:host=127.0.0.1;dbname=mvc', 'root', '');
	}
}