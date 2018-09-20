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
			Add New Client
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Client</h2>

				
					</div>
					
					<form action="add_client.php" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									
									<label>Full Name:<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="fname" required />
								</p>
                                 <p>
									
									<label>Phone Number: <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="phone" required />
								</p>	
								<p>
									
									<label>Email Address: <span>(Required Field)</span></label>
									<input type="email" class="field size1" name="email" required />
								</p>
                                  <p>
									
									<label>ID Number:  <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="id_no" required />
								</p>
								<p>
								<tr>
							<td><b>Gender:</b></td>
							<td>
								<select name="gender" required="required">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
							
						</tr>
						<p>
									
									<label>Location:  <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required />
								</p>
					</p>
					<p>
									
									<label>Username:  <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="username" required />
								</p>
								<p>
									
									<label>Password:  <span>(Required Field)</span></label>
									<input type="password" class="field size1" name="password" required />
								</p>
                                   
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
						if(isset($_POST['send'])){
							
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$id_no = $_POST['id_no'];
							$phone = $_POST['phone'];
							$gender = $_POST['gender'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							
							
							
							
							$qry = "INSERT INTO user(fname, email, id_no, phone, username, password, location, gender) VALUES ('$fname','$email','$id_no','$phone','$username','$password','$location','$gender')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Client Successfully Registered.\");
											window.location = (\"add_client.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Client Registration Failed. Try Again\");
											window.location = (\"add_client.php\")
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
		<span class="left">&copy; <?php echo date("Y");?> - Mount Kenya Real Estate</span>
		<span class="right">
			Designed by Blair</a>
		</span>
	</div>
</div>
	
</body>
</html>