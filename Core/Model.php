<?php
namespace Core;
use PDO;

class Model extends DB {

	protected $db;

	function __construct()
	{
		$this->db = new DB();
	}

	public function all() {
		return $this->db->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_OBJ);
	}

	public function find($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
		$stmt->execute([':id' => $id]);
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}