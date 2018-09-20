<!DOCTYPE HTML>
<html>
<head>
<title>real estate management system</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="scripts/nivo-slider/default/default.css" type="text/css" media="screen">
<link rel="stylesheet" href="scripts/nivo-slider/default/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="screen">
</head>
<style type="text/css">
  #victor_kiome
  {
    float: right;
  }
  #location
  {
    float: right;
  }
</style>
<body>
<body bgcolor="purple">

<header class="clearfix">
  <div class="container">
  <center><h1><font color="blue">REAL ESTATE MANAGEMENT SYSTEM</font></h1></center>
  <br />
  <br />
    <div id="logo" class="span-2"><img src="images/logo_03.png" alt=""></div>
    <h1 class="span-6">Real Estate Management System is <span>Transforming Lives</span></h1>
    <nav class="span-16 last">
      <ul class="right">
        <li class="active"><a href="index.php">Home</a></li>
		 <li><a href="about.php"><b>About us</b></a></li>	
        <li><a href="account.php"><b>Client</b></a></li>
        <li><a href="landlord.php"><b>Landlord</b></li>
        <li><a href="login.php"><b>Administrator</b></a></li> 	
      </ul>
    </nav>
  </div>
</header>
<section id="slider_wrapper" class="slider-wrapper theme-default container">
  <div id="slider" class="nivoSlider" style="box-shadow:none;"> <img src="images/img1.jpg" data-thumb="images/img1.jpg" alt=""> <img src="images/house1.jpg" data-thumb="images/house1.jpg" alt=""> <img src="images/house3.jpg" data-thumb="images/house3.jpg" alt=""><img src="images/house2.jpg" data-thumb="images/house2.jpg" alt=""> </div>
</section>
<div id="calltoaction" class="container clearfix">
  <div class="span-19">
    <p>We offer the best rooms at affordable prices. Do not miss to visit us anytime. <span>Feel free and come.</span></p>
  </div>
</div>
<div class="separator"></div>
<div class="separator"></div>

<footer class="clearfix">
  <div class="container">
    <div class="about span-6 append-1">
      <h3>About Real Estate Management System</h3>
      <p>This is a site that helps clients to get properties at an affordable price.The clients s are able to book the rooms online from the comfort of their beds and communicate online with the landlord and the admin.</p>
      <p class="social_icons">Follow us on :<a href="#"><img src="images/tweeter.png" alt=""></a> <a href="www.facebook.com/blairt94/"><img src="images/facebook.png" alt=""></a> <a href="#"><img src="images/gplus.png" alt=""></a> </p>
      <h4><b>Email: </b>vic@gmail.com</h4>
           <font color="green"><h4><font color="blue"><u>CONTACTS:</u></font><br /> <marquee scrollamount="5" width="40"><img src="images/phone.png" alt="img" />
                     </marquee><strong>+254715096908</strong><marquee scrollamount="5" direction="right" width="40"><img src="images/phonee.png" alt="img" /></marquee></h4></font>
    </div>
    <div id="victor_kiome">
    <div id="footer_form" class="span-10 last clearfix">
      <h3>Send us a message:</h3>
      <form action="index.php" method="post">
        <div class="row">
          <label>Your name:</label>
          <input type="text" name="name" class="span-7 right last" required="required">
        </div>
        <div class="row">
          <label>Your email</label>
          <input type="text" name="email" class="span-7 right last" required="required">
        </div>
        <div class="row">
          <label>Your message</label>
          <textarea name="message" class="span-7 right last" required="required"></textarea>
        </div>
        <div class="span-7 right last">
          <input type="submit" name="submit" value="Send"class="right">
        </div>
      </form>
    </div>
  </div>
 
  <div id="location">
	<div id="footer_form" class="span-10 last clearfix">
      <h2><font color="blue"><strong> LOCATION </strong></font></h2>
                     <br />
					 <h4><font color="blue"> Located at:</font>
                    <h4>Meru Town,</h4>
                     <h4>MERU,</h4>
                    <h4>KENYA.</h4>
                     <br />
                   
					  <br />
					  <br />
					  
    </div>
  </div>

	
    <hr>
    Copyright 2018 by<b> Vic</b>, all rights reserved <span class="right last">Design by: <a href="">Vic <a href="http://www.facebook.com/blairt94/"></a></a></span></div>
</footer>
<script src="scripts/jquery-1.7.1.min.js"></script>
<script src="scripts/nivo-slider/jquery.nivo.slider.js"></script>
<script>
$(window).load(function () {
    $('#slider').nivoSlider();
});
</script>
<?php
 if(isset($_POST['submit'])){
include 'includes/config.php';

$fname = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$qry = "INSERT INTO contact (fname,email,message)
							VALUES('$fname','$email','$message')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Thank you for contacting us. You will get a reply as soon as posssible.\");
											window.location = (\"index.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Submission failed. Try Again\");
											window.location = (\"index.php\")
											</script>";
							}
						}


 ?>
</body>
</html>