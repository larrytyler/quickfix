<?php  

class Location{


	 public $conn;
function __construct(){

		$this ->conn =new mysqli("localhost","root","","quick_fixx");
if($this->conn->connect_error){
	die("failed: .$this->conn->connect_error");
}

	}


#begin to get location
	function getLocation(){

		$sql = "SELECT * from location";
		$result = $this->conn->query($sql);

		$records = array();
		if($result -> num_rows >0){
			while($row =$result->fetch_assoc()){
				$records[] =$row;
			}
			return $records;
		}else{
			return $records;
		}

	}






}


?>