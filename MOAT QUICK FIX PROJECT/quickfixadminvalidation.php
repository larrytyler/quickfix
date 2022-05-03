<?php 






if($_SERVER['REQUEST_METHOD']=='POST') {
	if(empty('$_POST'['useremail'])){

		echo "email cannot be empty";
	}
if(empty($_POST['userpassword'])){
	echo "password cannot be empty";
}
 include_once('quickfixclass.php');

 $objuser =new User;
 $output = $objuser->login($_POST['useremail'],$_POST['userpassword']);
 if($output == true){
 	header('Location: quickfixadmin.php');
 	exit;
 }else{

 	echo "username and password is not correct";

 }

}
  ?>