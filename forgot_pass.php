<?php 
  
	require("includes/config.php");
	
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
		<a href="index.php"><b><font size="20px;"><font color="white">HOME</font></font></b></a>
	</div>
		<div class="wrapper">
			<font size="50px;">Change Password<br /><br /><br /></h3>
				<form method="post" action="forgot_pass.php">
					<table>
						<tr>
							<td>Enter Email Address:</td>
							<td><input type="email" name="email" required></td>
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

				<?php 
  
						if(isset($_POST['change']))
						{
						
						    $user_email = $_POST['email'];
							$npass = md5($_POST['npass']);				
							$cpass = md5($_POST['cpass']);
						if($npass == $cpass)
						{
							$query = mysqli_query($conn, "SELECT * FROM user") or die(mysqli_error($conn));
							$result = mysqli_fetch_array($query);
							//$password = $result['password'];
                            $email = $result['email'];
							if($user_email == $email)
							{
								$result = mysqli_query($conn,"UPDATE user SET password = '$npass' WHERE email = '$user_email'") or die(mysqli_error($conn));
								if($result)
								{
									?>
									<script type="text/javascript">
										window.alert("Password changed successfully");
                                        window.location.href="forgot_pass.php";
									</script>
									<?php
								}
								else
								{
									?>
									<script type="text/javascript">
										window.alert("Password Not Changed. \n Please Try Again");
                                        window.location.href="forgot_pass.php";
									</script>
									<?php
								}
							}
							else
							{
								?>
									<script type="text/javascript">
										window.alert("Email Not Found. \n Please Try Again");
                                        window.location.href="forgot_pass.php";
									</script>
									<?php
							}
						}
						else
						{
						?>
									<script type="text/javascript">
										window.alert("Passwords Don't Match");
                                        window.location.href="forgot_pass.php";
									</script>
									<?php	
						}
							
							}
							
							
						
						
					  ?>
				
			</ul>
		</div>
	</section>	</center><!--  end listing section  -->
</body>
</html>