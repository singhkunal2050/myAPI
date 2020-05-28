<?php

class User{
	private $conn;
	private $table = 'user';

	public $id, $uname , $village ,$taluka ,$district, $phoneno ,$adhaarno;

	public function __construct($db){
		$this->conn = $db;
		echo "called const";
		// print_r($db);
	}

	public function read(){
		$query = 'SELECT * FROM user'; // . $this->table ;
		// print_r($this->conn);
		$result = $this->conn->query($query);
		// $result = mysqli_query($this->conn , $query);
		return $result;
	}



}

?>