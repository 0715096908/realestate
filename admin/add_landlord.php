<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
	<style type="text/css">
		.blairman
		{
			float:right;
		}
	</style>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Landlord
		</div>
		
		<br />
			<div class="blairman">
						<a href="view_landlords.php"><buttton><font color="blue"><b>VIEW LANDLORDS</b></font></buttton></a>
					</div>
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
			
				<div class="box">
					<div class="box-head">
						<h2>Add New Landlord</h2>

					</div>
					
					<form action="add_landlord.php" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									
									<label>Username<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="username" required />
								</p>
                                 <p>
									
									<label>Email<span>(Required Field)</span></label>
									<input type="email" class="field size1" name="email" required />
								</p>	
								<p>
									
									<label>Full Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="name" required />
								</p>
                                  <p>
									
									<label>Phone number <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="phone" required />
								</p>
								<p>
									
									<label>Gender <span>(Required Field)</span></label>
									<select name="gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</p>
								<p>
									
									<label>Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required />
								</p>
                                   <p>
									
									<label>Password <span>(Required Field)</span></label>
									<input type="password" class="field size1" name="password" required />
								</p>									
								
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send']))
							{
								
								
								
								$l_username = $_POST['username'];
								$email = $_POST['email'];
								$fName = $_POST['name'];
								$phonenumber = $_POST['phone'];
								$gender = $_POST['gender'];
								$location = $_POST['location'];
								$password = md5($_POST['password']);
								
								
								
								
								
								$qr = "INSERT INTO landlord (l_username, email,fName,phonenumber,gender,location,password) 
													VALUES ('$l_username','$email','$fName','$phonenumber','$gender','$location','$password')";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res>0){
									echo "<script type = \"text/javascript\">
											alert(\"Landlord added successfully\");
											window.location = (\"add_landlord.php\")
											</script>";
									}
								
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"House not added. Try again.\");
											window.location = (\"add_landlord.php\")
											</script>";
								}
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> Mount Kenya Real Estate Management</span>
		<span class="right">
			Designed by Blair</a>
		</span>
	</div>
</div>
	
</body>
</html>