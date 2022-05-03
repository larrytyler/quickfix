<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Workers</title>
</head>
<body>
<h1>Edit Workers</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<?php 
include_once("classworker.php");

$id=$_GET['id'];
$objwork= new Worker;
$result=$objwork->findWorker($id);

if($_SERVER['REQUEST_METHOD']=='POST'){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$department=$_POST['department'];

	include_once("classworker.php");
	$objupdate= new Worker;
	$output=$objupdate->updateWorker($firstname,$lastname,$department,$id);
	if($output==true){
		echo "Worker Profile Updated Successfully";
	}else{
		echo "Could not update a profile";
	}
}


?>

<form method="post" action="">

  <label>Firstname</label>
<input type="text" name="firstname" placeholder="Enter firstname" class="form-control" value="<?php if(isset($result['first_name'])){ echo $result['first_name'];} ?>" required >


<br>
<br>
 <label>Lastname</label>
<input type="text" name="lastname" placeholder="Enter last name " class="form-control" value="<?php if(isset($result['last_name'])){ echo $result['last_name'];} ?>"  required>
<br>
<br>
<label>Department</label>
<br>
<input type="radio" name="department" placeholder="" class="" value="plumbing"  >plumbing <br>
<input type="radio" name="department" placeholder="" class="" value="electricals"  >electricals <br>
<input type="radio" name="department" placeholder="" class="" value="house cleaning/drycleaning"  >House cleaning/drycleaning <br>
<input type="radio" name="department" placeholder="" class="" value="fumigation services"  >fumigation services <br>
<input type="radio" name="department" placeholder="" class="" value="mechanics/automobile"  >mechanics/automobile



<br>
<br>
<button class="btn  btn-danger" name="submit"  value="submit" id="regbutt">Edit worker</button>

</form>



<div class="row mt-5">

<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboard.php"
 class="btn btn-danger" role="button">Admin Dashboard</a>


</div>






<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboardworker.php
" class="btn btn-danger" role="button">Workers/Employees Table</a>







		</div>
	</div>
</div>
</body>
</html>