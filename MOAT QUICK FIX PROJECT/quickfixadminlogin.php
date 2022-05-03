<?php 


if($_SERVER['REQUEST_METHOD']=='POST') {
  if(empty('$_POST'['adminemail'])){

    echo "<div class='alert alert-danger'>email cannot be empty</div";
  }
  
if(empty($_POST['adminpassword'])){
  echo "<div class='alert alert-danger'>password cannot be empty</div";
}
 include_once('quickfixclass.php');

 $objuser =new User;
 $output = $objuser->admin($_POST['adminemail'],$_POST['adminpassword']);
 if($output == true){
  header('Location: quickfixadmindashboard.php');
  exit;
 }else{

  echo "<div class='alert alert-danger'>adminusername and password is not correct</div>";

 }

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
	<title></title>


	<style type="text/css" >


  #thedivback{ background-color: rgba(253, 178, 283,0.5) ; 
     background-image: url('images/p2.jpg') ;
     width: 100%;
}


  #overlay{
    background-color: rgb(255, 255, 255);
  }



##registeredusers{background-image: url('images/quick.jpg');
  background-repeat:repeat-x;

}
</style>


</head>
<body >

<div class="container-fluid" style="">
	<div id='overlay'>
	<div class="row">
	
		<div class="col-md-3">

<div style="background-color:;" > 
	<h4  class="animate__animated animate__bounce" style="font-size:70px;font-weight:bolder;color:rgb(13, 110, 253)" >Quicfix</h4> 

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
        
	
		<li class="nav-item">
          <a style="font-size:25px;color: rgb(255, 255, 255)" class="nav-link" href="http://localhost/kilophp/week3bootstrap/quickfixaboutus.php">About Us</a>
        </li>
		
        
      </ul>
      <form class="d-flex">
        
      </form>
    </div>
  </div>
</nav>

<!--navbar end-->
</div>


<div class="row" id="theddivback" style="">
<div class="col-md-6">  </div>

<div class="col-md-6">
<div align="right" style="background-color: white;">
 <a  style="color:rgb(29, 32, 44)" href="https://www.facebook.com/" target="/"class="fab fa-facebook-square fa-2x" ></a>
<a  style="color:rgb(29, 32, 44)" href="https://www.twitter.com/" target="/" class="fab fa-twitter-square fa-2x" ></a>
 <a  style="color:rgb(29, 32, 44)" href="https://www.instagram.com/" target="/" class="fab fa-instagram-square fa-2x" ></a>
 </div>
 </div>


</div>


<br>
     
      <div align=""  class="">
  <h1>ADMIN LOGIN</h1>

</div>







    <div class="row">

<div class="col-md-6">
  
 <form method="post" action="">

            <input type="text" name="adminemail" class="form-control" placeholder="enter admin email" >
            <br>
            <input type="password" name="adminpassword" class="form-control" placeholder="enter admin password">
            <br>
            <button type="submit" name="submit"  value="submit" class="btn btn-info m-1 animate__animated animate__bounce form-control">Login</button>
      </form>

</div>
</div>




<div class="row mt-5">


</div>



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
<p> <a href="http://localhost/kilophp/week3bootstrap/quickfix.php">Home</a></p>

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