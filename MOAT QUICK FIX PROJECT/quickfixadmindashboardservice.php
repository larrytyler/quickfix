<!DOCTYPE html>

<html>
<head>


<!--bootstrap CSS-->
<link href="bootstrap/css/bootstrap.css"   rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.min.css"   rel="stylesheet" type="text/css" />
<!--fontawesome css-->
<link href="fontawesome/css/all.css" rel="stylesheet"/>
<link href="bootstrap/animate/animate.css" rel="stylesheet">
<!--favicon linking-->
<link rel="icon" href="images/favicon.ico"/>





	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


	<style type="text/css" >


  #thedivback{ background-color: rgba(253, 178, 283,0.5) ; 
     background-image: url('images/p2.jpg') ;
     width: 100%;
}


  #overlays{
    background-color: rgb(255, 255, 255);
  }



##registeredusers{background-image: url('images/quick.jpg');
  background-repeat:repeat-x;

}
</style>


</head>
<body style="background-color: ">

<div class="container-fluid" style="background-color:whitesmoke; color:black;">
	<div id='overlay'>
	<div class="row">
	
		<div class="col-md-3">

<div style="background-color:" > 
	<h4  class="animate__animated animate__bounce" style="font-size:70px;font-weight:bolder;color:rgb(13, 110, 253)" >Quicfix</h4> 

 </div>
	</div>


<div class="col-md-9">
  <div style="margin-left:1040px;margin-top:50px">
  <a href="http://localhost/kilophp/week3bootstrap/quickfixadminlogin.php"
 class="btn btn-danger" role="button">Logout</a>
</div>
</div>
</div>




<div class="col-lg-12 sticky-top">
<!--beginNavbar-->

<nav class="navbar navbar-expand-lg navbar-dark "  style="background-color:rgb(64, 55, 110);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="font-size:25px;color: rgb(255, 255, 255)" class="nav-link active" aria-current="page" href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboard.php">Home</a>
        </li>
        
		
	
      </ul>
      <form class="d-flex">
       
      </form>
    </div>
  </div>
</nav>

<!--navbar end-->
</div>


<div class="row" id="theddivback" style="background-color:">
<div class="col-md-6">  </div>

<div class="col-md-6">
<div align="right" style="background-color: white;">
 <a  style="color:rgb(29, 32, 44)" href="https://www.facebook.com/" target="/"class="fab fa-facebook-square fa-2x" ></a>
<a  style="color:rgb(29, 32, 44)" href="https://www.twitter.com/" target="/" class="fab fa-twitter-square fa-2x" ></a>
 <a  style="color:rgb(29, 32, 44)" href="https://www.instagram.com/" target="/" class="fab fa-instagram-square fa-2x" ></a>
 </div>
 </div>


</div>








    <div class="row" style="background-color: ">


<br>
     
      <div align=""  class="">
  <h1 >ADMIN DASHBOARD</h1>
  <h4>Services</h4>

</div>

</div>






<?php


echo "<hr>";
echo "<hr>";
echo "<hr>";



   ?>


<?php    

if(!empty($_POST)){

  $servicetype= strip_tags(trim($_POST['servicetype']));

if(empty('$servicetype')){

  $err_msg = "all fields required worker, you are going to nowhere!!! No games";
}

else{

  include_once('classservice.php');
$obg =new Service;
$response =$obg->addService($servicetype);
if($response != "service added successfully"){

  $error_msg=$response;
}
else {
 echo "Congratulations, service added";
}
}
}

?>





   <div class="row">
<div class="col-md-6">
 <h1 style="color:whitesmoke" > Add another service</h1>




<form method="post" action="">

  <label>Service-Type</label>
<input type="text" name="servicetype" placeholder="Enter service Type" class="form-control" value="" required >


<br>
<br>

<button class="btn  btn-danger" name="submit"  value="submit" id="regbutt">Add a service</button>

</form>
</div>

</div>


<?php  

include_once('classservice.php');


$objuser = new Service;

$messages = $objuser->getServiceInfo();

// echo "<pre>";
 // print_r($messages);

// echo "</pre>";

?>
<h1 align="center"> Services Table</h1>
<table class="table table-bordered table-striped primary">
  <thead>
    
  <tr>
    <th>Service Type</th>
    <th>Date created</th>


  </tr>
  </thead>
  <tbody>
    
    <?php  
foreach ($messages as $key => $value){
  $id=$value['service_id'];

?>
<tr>
<td> <?php  echo $value['service_type']; ?></td>
<td> <?php  echo $value['date_created']; ?></td>
<td>
  
  <a href="editservice.php?id=<?php echo $id; ?>" class="btn btn-primary-sm">
    <i class="fa fa-edit"></i> edit </a>

    
</td>
</tr>


<?php 

}
    ?>
  </tbody>
</table>



















</div>



<div class="row mt-5">

<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboard.php"
 class="btn btn-danger" role="button">Admin Dashboard</a>

</p>
</div>




<div style="background-color:rgb(29, 32, 44);height:200px" class="row mt-5">

<div class="col-md-2">

<div style="background-color:rgb(29, 32, 44)"> 
<i class="fab fa-whatsapp-square fa-3x" style="color:white;margin-left:20px;margin-top:20px"> </i><span style="color:white;margin-left:10px"> 08185287659</span> <br>

<i class="fas fa-phone-square fa-3x" style="color:white;margin-left:20px;margin-top:20px">    </i><span style="color:white;margin-left:10px;margin-bottom:10px" > 09052033789</span>   <br>

<i class="fas fa-envelope fa-2x" style="color:white;margin-left:20px;margin-top:20px"> </i> <span style="color:white;margin-left:5px;font-size:15px">larryibitoye@yahoo.com</span> <br>

</div>

</div>

<div class="col-md-2">


<div style="background-color:rgb(29, 32, 44)">
<h4 style="color:white;margin-top:20px">Events:</h4>
<p style="color:white">APP LAUCHING AND INAUGURATION </p>
<p style="color:white">Date:1st, April 2022</p>
 
</div>

</div>

<div class="col-md-2">


<div style="background-color:rgb(29, 32, 44);font-family:cambria">
<h4 style="color:white;margin-top:20px">Pages:</h4>
<p> <a href="http://localhost/kilophp/week3bootstrap/quickfixelectricals.html">Home</a></p>

<p> <a href="">About Us</a></p>
<p> <a href="">Consultancy</a></p>

</div>

</div>

 
 
 <div class="col-md-2" style="margin-top:56px;">

 <div> <i style="color:white" class="fab fa-twitter-square fa-3x"> </i> </div> 
 </div>


 <div class="col-md-2" style="margin-top:56px;">
 
 <div> <i style="color:white" class="fab fa-facebook-square fa-3x "> </i> </div>
 </div>
 
 
 
<div class="col-md-2" style="margin-top:56px;">
 <div> <i style="color:white" class="fab fa-instagram-square fa-3x"> </i> </div>
 </div>
 
 
 
 
</div>



</div>



</div>








<script src="bootstrap/jquery.min.js"> </script>
<script type="text/javascript" language="javascript"> 

$(document).ready(function(){
//on page load hide register
$('#signupdiv').hide();

$('#signupbut').click(function(){
var thevalue=$(this).val();
if(thevalue=='register'){
    $('#logindiv').hide();
    $('#signupdiv').show();
}else{
    $('#logindiv').show();
    $('#signup').hide();
}
});
});

</script>

</body>
</html>