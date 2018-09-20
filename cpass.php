<?php 
   
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("includes/config.php");
	$id =$_SESSION['userid'];
	
	
	$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id ='$id'")or die(mysqli_error($conn));
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>real estate management system</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>
body
{
	background-color: purple;
}
#home
{
	float: right;
}
</style>
<body>
	

   
	<center><section class="listings">
		<div id="home">
		<a href="index11.php"><b><font size="20px;"><font color="white">BACK</font></font></b></a>
	</div>
		<div class="wrapper">
			<font size="50px;">Change Password<br /><br /><br /></h3>
				<form method="post" action="password.php?id=<?php echo $test['user_id']; ?>">
					<table>
						<tr>
							<td>Old Password:</td>
							<td><input type="password" name="opass" required></td>
						</tr>		
					<tr>
							<td>New Password:</td>
							<td><input type="password" name="npass" required></td>
						</tr>						
						<tr>
							<td>Confirm New Password:</td>
							<td><input type="password" name="cpass" required></td>
						</tr>			
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="change" value="Change"></td>
						</tr>
					</table>
				</form></font>
				
			</ul>
		</div>
	</section>	</center><!--  end listing section  -->
</body>
</html>