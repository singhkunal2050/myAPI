<?php 

class Database{
	public $conn;
	public $username='root' , $password='' , $dbname='lps' , $host='localhost';

	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname) or die("could not connect");
			// echo "Connection is " . $this->conn;
 
		} catch(Exception $e){
			echo "Exception " . $e->getMessage();
		}

		return $this->conn;
	}

}

?>