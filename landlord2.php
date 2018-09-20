<!DOCTYPE html>
<html lang="en">
<head>
	<title>real estate management system.</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
		

<body>
	
			  <?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  if(isset($_POST['login'])){
include 'includes/config.php';

$myuser = $_POST['username'];
$mypass = $_POST['password'];

$sql = "SELECT * FROM landlord where l_username='$myuser' and password='$mypass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {    
      
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();
$_SESSION['username'] = $myuser;
header("location:landlord-home.php?user=$myuser");

    }
 else {
    print '
  <div class="w3-panel w3-red">
    <h3 style="color:red">Error!</h3>
    <p>Account not found in DataBase.</p>
  </div>
';
}
$conn->close();

} ?>
<br>
			<div class = "row">	
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 alert alert-info">
			<h4>Login</h4>
			<hr  style = "clear:both;"/>
			<form enctype = "multipart/form-data" method = "POST" >
				<div class = "form-group">
				<span class="glyphicon glyphicon-user">
					<label>Username</label>
					
					<input type = "text" name = "username" class = "form-control" />
				</div>
				<div class = "form-group">
				<span class="glyphicon glyphicon-lock">
					<label>Password</label>
					<input type = "password" name = "password" class = "form-control" />
				</div>
				<div id = "loading">
				</div>
				<br />
				<div class  = "form-group">
					<button type="submit" name="login" class="form-control" class="w3-btn w3-red"><span class = "glyphicon glyphicon-log-in"></span> Log me in</button>
				</div>
			</form>
		</div>
		<div class = "col-md-4">
		</div>
	</div>