
  <?php 


if($_SERVER['REQUEST_METHOD']=='POST') {
  $errors = array();
  if(empty($_POST['useremail'])){

    $useremail =strip_tags(trim($_POST['useremail']));

    $errors['useremail'] = "email cannot be empty";
  }
if(empty($_POST['userpassword'])){

  $userpassword =strip_tags(trim($_POST['userpassword']));

  $errors['userpassword'] = "password cannot be empty";



}


if (empty($errors)) {
  include_once('quickfixclass.php');

 $objuser =new User;
 $output = $objuser->login($_POST['useremail'],$_POST['userpassword']);
 if($output == true){
  header('Location: quickfixwelcomeuser.php');
  exit;
 }else{

  echo "<div class='alert-danger'>username and password is not correct</div>";

 }

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

    .background{ background-color: whitesmoke ; 
     background-image: url('imagesss/quick.jpg') ;
  }

  #thedivback{ background-color: rgba(253, 178, 283,0.5) ; 
     background-image: url('images/p2.jpg') ;
     width: 100%;
}


  ##overlay{
    background-color: rgba(0,0,0,0.7);
  }

#overlay2{
    background-color: rgba(0,3,0,0.0);
  }

##registeredusers{background-image: url('images/quick.jpg');
  background-repeat:repeat-x;

}
</style>


</head>
<body>

<div class="container-fluid background">
	<div id='overlay'>
	<div class="row">
	


  
		<div class="col-md-3">

<div style="background-color:;" > 
	<h4  class="animate__animated animate__bounce" style="font-size:70px;font-weight:bolder;color:rgb(25, 100, 210)" >Quicfix</h4> 

 </div>
	</div>

</div>




<div class="col-lg-12 sticky-top">
<!--beginNavbar-->

<nav class="navbar navbar-expand-lg navbar-dark "  style="background-color:rgb(11, 94, 215);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="font-size:25px;color: floralwhite" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
		<li class="nav-item">
          <a style="font-size:25px;color: floralwhite" class="nav-link" href="http://localhost/kilophp/week3bootstrap/quickfixsignup.php">Sign-up</a>
        </li>
		<li class="nav-item">
          <a style="font-size:25px;color: floralwhite" class="nav-link" href="http://localhost/kilophp/week3bootstrap/quickfixsignup.php">About Us</a>
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
<div align="right" style="">
<a  style="color:rgb(29, 32, 44)" href="https://www.facebook.com/" target="/"class="fab fa-facebook-square fa-2x" ></a>
<a  style="color:rgb(29, 32, 44)" href="https://www.twitter.com/" target="/" class="fab fa-twitter-square fa-2x" ></a>
 <a  style="color:rgb(29, 32, 44)" href="https://www.instagram.com/" target="/" class="fab fa-instagram-square fa-2x" ></a>
 </div>
 </div> 



</div>


<br>
      <br>

    <div class="row">


<div class="col-md-6" style="height:100px;margin-left:15px">
<!--begin slider-->

<div id="myslider" class="carousel slide carousel-fade" data-bs-ride="carousel">
<!--carousel-indicators start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myslider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myslider" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myslider" data-bs-slide-to="2" aria-label="Slide 3"></button>
  <button type="button" data-bs-target="#myslider" data-bs-slide-to="3" aria-label="Slide 3"></button>
  
  
  </div>

<!--carousel indicators end-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/p11.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block"> 
     <h2> PLUMBING </h2>
    <p>
    
    
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/fum6.jpg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block"> 
    <h2> FUMIGATION </h2>
    <p>
    
    </div>
    </div>
    <div class="carousel-item">

      <img src="images/elect55.jpg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block"> 
    <h2> ELECTRICALS </h2>
    
    
    </div>
    </div>
  
  <div class="carousel-item">
      <img src="images/clean4.jpg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block"> 
      <h2>HOUSE CLEANING</h2>
    
    
    </div>
    </div>
  
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myslider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myslider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



</div>
</div>

<br>
<br>



      <?php 

if(!empty($error_msg)){
  echo"<div class='alert alert-danger'>$errors<div>";

}

  ?>


    	<div class="col-md-3" id="registeredusers" style="border:2px;width:40%;background-color: rgb(244, 236, 225);padding:20px;margin-left:70px;background-image:url('images/p2.jpg'); ">

        <div id="logindiv">
<h3 style="font-size:40px;color:navy;font-family:consolas;font-weight: bold;">Registered Users</h3>
   <div style="width:30%;">
    		<br>

    		 <form method="post" action="">

            <input type="text" name="useremail" class="form-control" placeholder="enter your email" required>
            <br>
            <input type="password" name="userpassword" class="form-control" placeholder="enter your password" required>
            <br>
            <button type="submit" name="submit"  value="submit" class="btn btn-primary m-1 animate__animated animate__bounce form-control">Login</button>
			</form>

<h5 style="font-size:25px ;color: rgb(19, 99, 19);">New on here ?</h5>
<p style="margin-left: 25px;">
<a href="quickfixsignup.php" class="btn btn-primary  m-1 animate__animated animate__backInDown" role="button" >SignUp Here</a>
</p> 
</div>
</div>

    </div>

</div>
<div class="row " style="margin-top:200px" >

<div class="col-md-4">
<img src="images/p1.jpg"   alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-primary" role="button">PLUMBING SERVICES</a>

</p>
</div>



<div class="col-md-4">
<img src="images/fum1.jpg"   alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-primary" role="button">FUMIGATION SERVICES</a>

</p>
</div>




<div class="col-md-4">
<img src="images/clean2.jpg"   alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-primary" role="button">HOUSE CLEANING/DRYCLEANING SERVICES</a>

</p>
</div>






</div>

<div class="row mt-5">


<div class="col-md-4">
<img src="images/elect1.jpg"   alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-primary" role="button">ELECTRICAL/ELECTRONICS</a>

</p>
</div>


<div class="col-md-4">
<img src="images/elect5.jpg" style="height:320px;width:100%"  alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-danger" role="button">CONNECT TO QUICK FIX ONLINE NOW!!</a>

</p>
</div>


<div class="col-md-4">
<img src="images/mech3.jpg"   alt="image" class="img-thumbnail">

<p align="center" style="margin-top :5px">
<a href="#logindiv" class="btn btn-primary" role="button">MECHANICAL SERVICES</a>

</p>
</div>



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







<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
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