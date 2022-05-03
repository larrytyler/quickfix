<?php


  class User{

public $dbcon;

function  __construct(){

$this->dbcon = new mysqli("localhost","root","","quick_fixx");


}
 

  function connect($firstname,$lastname,$email,$gender,$phone,$password){
    $password = password_hash($password, PASSWORD_DEFAULT);

$insertquery = "INSERT INTO  registered_users SET first_name='$firstname',last_name='$lastname',email='$email',gender='$gender',phone='$phone',password='$password' ";

//echo '$insertquery'; 

$this->dbcon-> query($insertquery);
if($this->dbcon->error){

	return $this->dbcon->error;
}
else{
  return  "<div class='alert alert-success'>Registration Successful</div>";

}


  }

  function checkEmail($email) {
    $email = mysql_real_escape_string($email);

    $sql = mysql_query("SELECT * FROM registered_users WHERE email='$email'");

    if (mysql_num_rows($sql) == 0) {
        return true;
    }


    else{
        return  "<div class='alert alert-success'>email already exists/div>";
    }
}




 function admin($adminemail , $adminpassword){
  

  $insertquery = "SELECT * FROM admin Where admin_useremail ='$adminemail'  AND admin_password = '$adminpassword'  ";

  $result = $this->dbcon->query($insertquery);
  if($result->num_rows==1){

     session_start();
   //$_SESSION ['myuserid']=$row['admin_id'];
   $_SESSION ['adminemail']=$row['admin_useremail'];
   //$_SESSION ['mylogchecker']='Rt_0_0_cMeg';

  
    return true;
  }else{
    return false;
  }


 }


function getEmail($id){
  $sql="SELECT * from registered_users WHERE reg_user_id='$id'";
  $result=$this->dbcon->query($sql);
  if($this->dbcon->affected_rows==1){
      $row=$result->fetch_assoc();
      $email=$row['email'];
      return $email;
  }else{
        return $email;
  }
}


function getMessages(){
$sql = "SELECT * from registered_users";
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


function workerTable(){
$sql = "SELECT * from worker";
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



/*
function userLogin($useremail , $userpassword){


  $insertquery = "SELECT * FROM registered_users Where email ='$useremail'  AND password = '$userpassword'  ";

 $result =$this->dbcon->query($insertquery);
 if($this->dbcon->affected_rows == 1){
  return true ;
 }
else{return false ;
}

}

*/
// start login
function login($useremail, $userpassword){

  //write query

 $insertquery = "SELECT * FROM registered_users Where email ='$useremail'";

 //var_dump($insertquery);

//run query

$result =$this->dbcon->query($insertquery);

if ($result ->num_rows > 0){
$row =$result->fetch_assoc();
$confirm = password_verify($userpassword,$row['password']);
  

 if ($confirm){
// // create session variables 
   session_start();
   $_SESSION ['myuserid']=$row['reg_user_id'];
   $_SESSION ['myfirstname']=$row['first_name'];
   $_SESSION ['mylastname']=$row['last_name'];
   $_SESSION ['mylogchecker']='Rt_0_0_cMeg';
  

  return true;
}else{

  return false;

}

}


//}
#end login

}




public function logout(){

  session_start();

  session_destroy();

 //redirect to login
  header("Location: quickfix.php");
  exit;

 }









}

?>