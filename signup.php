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
	background-color: orange;
}
#back
{
	float: right;
}
</style>
<body>
<div id="back">
<a href="index.php"><button>HOME</button></a>
</div>
<section class="">
		

			<section>
				

				<h3 class="properties" style="text-align: center"></h3>
			</section>
			<h2><font size="30px;"><font color="blue"><center><u>Customer Registration Panel</u></font></font></h2></center>
	
	</section><!--  end hero section  -->
	<center><section class="listings">
		<div class="wrapper">			
				<h3><font size="5px;"><font color="blue">Complete the form below:</font></h3>
				<form method="post" action="signup.php">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>ID Number:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
							
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td>Username:</td>
							<td><input type="text" name="username" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
					</form>
					<center><h1>Already Registered? <a href="account.php">Login Here</a></h1></center>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$id_no = $_POST['id_no'];
							$phone = $_POST['phone'];
							$gender = $_POST['gender'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							$password = $_POST['password'];
							
							
							
							
							$qry = "INSERT INTO user(fname, email, id_no, phone, username, password, location, gender) VALUES ('$fname','$email','$id_no','$phone','$username','$password','$location','$gender')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	</center><!--  end listing section  -->

</body>
</html>