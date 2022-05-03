<?php 


class Worker{
 
public $dbcont;



function  __construct(){

$this->dbcont = new mysqli("localhost","root","","quick_fixx");


}


   function connect($firstname,$lastname,$department){

$insertquery = "INSERT INTO  worker SET first_name='$firstname',last_name='$lastname', department='$department' ";


$this->dbcont-> query($insertquery);
if($this->dbcont->error){

	return $this->dbcont->error;
}
else{
  return "worker added succesfully";

}
}


 function editWorker($firstname,$lastname,$department,$id){
$sql = "Update worker SET firstname = '$firstname', lastname= '$lastname' , department='$department' WHERE worker_id=$id ";

$result = $this->dbcont->query($sql);
if($this->dbcont->affected_rows==1 || $this->dbcont->affected_rows == 0){

  return true;
}else {

  return false;
}

 }

    function findWorker($id){

  $sql = "SELECT * FROM worker where worker_id = '$id'";

  $result = $this->dbcont->query($sql);
if($result ->num_rows== 1){
  $row=$result->fetch_assoc();
  return $row;
}else{
  return false ;
}
}



  //function to update worker
  function updateWorker($firstname,$lastname,$dept,$id){
    $sql="UPDATE worker SET first_name='$firstname',last_name='$lastname',department='$dept' WHERE worker_id='$id'";
    $result=$this->dbcont->query($sql);
    if($this->dbcont->affected_rows==1){
        return true;
    }else{
      return false;
    }
  }

  }

























 ?>