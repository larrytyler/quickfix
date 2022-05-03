<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Service</title>
</head>
<body style="">
<h1>Edit Service</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<?php 
include_once("classservice.php");

$id=$_GET['id'];
$objservice= new Service;
$result=$objservice->findService($id);

if($_SERVER['REQUEST_METHOD']=='POST'){
	$servicetype=$_POST['servicetype'];
	

	include_once("classservice.php");
	$objupdate= new Service;
	$output=$objupdate->updateService($servicetype,$id);
	if($output==true){
		echo "Service Updated Successfully";
	}else{
		echo "Could not update service";
	}
}


?>

<form method="post" action="">

  <label>Service-Type</label>

<input type="text" name="servicetype" placeholder="Enter service Type" class="form-control" value="<?php if(isset($result['service_type'])){ echo $result['service_type'];} ?>" required >

<br>
<br>

<button class="btn  btn-danger" name="submit"  value="submit" id="regbutt">Edit Service</button>

</form>



<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboard.php
" class="btn btn-danger" role="button">Admin Dashboard</a>
<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboardservice.php
" class="btn btn-danger" role="button">Services Table</a>






		</div>
	</div>
</div>
</body>
</html>