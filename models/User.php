<?php

class User{
	private $conn;
	private $table = 'user';

	public $id, $uname , $village ,$taluka ,$district, $phoneno ,$adhaarno;

	public function __construct($db){
		$this->conn = $db;
	}

	public function read(){
		$query = 'SELECT * FROM '. $this->table ;
		// print_r($this->conn);
		$result = $this->conn->query($query);
		// $result = mysqli_query($this->conn , $query);
		return $result;
	}

	public function read_single(){
		$query = 'SELECT * FROM '. $this->table . ' WHERE id = ' . $this->id;
		$result = $this->conn->query($query);
		$row =  mysqli_fetch_row($result);

		// due to extract we dont have to call $row[id] and so on

		$this->id = $row[0];
		$this->uname = $row[1];
		$this->village = $row[2];
		$this->taluka = $row[3];
		$this->district = $row[4];
		$this->phoneno = $row[6];
		$this->adhaarno = $row[6];
	}
}

?>