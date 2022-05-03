
<?php

session_start();

//check if user authenticated 
if(isset($_SESSION['mylogchecker']) && $_SESSION['mylogchecker'] == 'Rt_0_0_cMeg') {

}
else {
  header("Location: quickfixadminlogin.php");
exit;

}

?>






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
	<title>quickfixadmindashboard</title>


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

<div class="container-fluid" style="background-color:black; color:white;">
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
          <a style="font-size:25px;color: rgb(255, 255, 255)" class="nav-link active" aria-current="page" href="#">Home</a>
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
<div align="right" style="background-color: ;">
 <a  style="color:white" href="https://www.facebook.com/" target="/"class="fab fa-facebook-square fa-2x" ></a>
<a  style="color:white" href="https://www.twitter.com/" target="/" class="fab fa-twitter-square fa-2x" ></a>
 <a  style="color:white" href="https://www.instagram.com/" target="/" class="fab fa-instagram-square fa-2x" ></a>
 </div>
 </div>



</div>








    <div class="row" style="background-color: ">


<br>
     <div>
   <?php 
      if (!empty( $_SESSION ['adminemail'])) {
        echo "<h2>". $_SESSION ['adminemail']."</h2>";
      }
   ?>
 </div>
      <div align=""  class="">
  <h1 >ADMIN DASHBOARD</h1>

</div>

</div>


    














<p align="center" style="margin-top :5px">
<a href="
http://localhost/kilophp/week3bootstrap/quickfixadmindashboardregisteredusers.php

" class="btn btn-danger" role="button">Registered Users Table</a>

<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboardworker.php
" class="btn btn-danger" role="button">Workers/Employees Table</a>

<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboardservice.php
" class="btn btn-danger" role="button">Services Table</a>

<p align="center" style="margin-top :5px">
<a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboardorder.php
" class="btn btn-danger" role="button">Order Table</a>






















<div class="row mt-5">



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
<p> <a href="http://localhost/kilophp/week3bootstrap/quickfixadmindashboard.php">Home</a></p>

<p> <a href="http://localhost/kilophp/week3bootstrap/quickfixaboutus.php">About Us</a></p>


</div>

</div>

 
 
 <div class="col-md-2" style="margin-top:56px;">

 <div> <a  style="color:white" href="https://www.twitter.com/" target="/" class="fab fa-twitter-square fa-3x" ></a> </div> 
 </div>


 <div class="col-md-2" style="margin-top:56px;">
 
 <div> <a  style="color:white" href="https://www.facebook.com/" target="/"class="fab fa-facebook-square fa-3x" ></a></div>
 </div>
 
 
 
<div class="col-md-2" style="margin-top:56px;">
 <div>  <a  style="color:white" href="https://www.instagram.com/" target="/" class="fab fa-instagram-square fa-3x" ></a></div>
 </div>
 
 
 
 
</div>



</div>



</div>








<script src="bootstrap/jquery.min.js"> </script>
<script type="text/javascript" language="javascript"> 

</script>

</body>
</html>