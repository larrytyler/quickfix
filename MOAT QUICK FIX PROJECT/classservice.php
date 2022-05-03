<?php 


class Service{


public $dbcon;




function __construct(){

$this->dbcon = new Mysqli("localhost","root","","quick_fixx");

}

function addService($servicetype){

$insertquery = "INSERT INTO  service SET service_type='$servicetype'";


$this->dbcon-> query($insertquery);
if($this->dbcon->error){

	return $this->dbcon->error;
}
else{
  return "Congratulations, service added";


}
}




function getServiceInfo(){
$sql = "SELECT * from service";
$result = $this->dbcon->query($sql);

$rows = array();
if ($this->dbcon->affected_rows>0){

  while($row

   = $result -> fetch_array()){
    $rows[]=$row;

  }

return $rows;
}
else{
  return $rows;
}
}




    function findService($id){

  $sql = "SELECT * FROM service where service_id = '$id'";

  $result = $this->dbcon->query($sql);
if($result ->num_rows== 1){
  $row=$result->fetch_assoc();
  return $row;
}else{
  return false ;
}
}







  function updateService($servicetype, $id){
    $sql="UPDATE service SET service_type='$servicetype' WHERE service_id='$id' ";

    $result=$this->dbcon->query($sql);
    if($this->dbcon->affected_rows==1){
        return true;
    }else{
      return false;
    }
  }





}


?>