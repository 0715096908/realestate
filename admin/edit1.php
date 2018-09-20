<?php
	include '../includes/config.php';
	if(isset($_GET['id']))
	{
	$user_id = $_GET['id'];
	$select = mysqli_query($conn,"SELECT * FROM user WHERE user_id = '$user_id'") or die(mysqli_error($conn));
	$selresult = mysqli_fetch_array($select);
	}
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
					
					<form action="client_edit.php?id=<?php echo $user_id ?>" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									
									<label>Full Name:<span>(Required Field)</span></label>
									<input type="text" class="field size1"value="<?php echo $selresult['fname']; ?>" name="fname" required />
								</p>
                                 <p>
									
									<label>Phone Number: <span>(Required Field)</span></label>
									<input type="text" class="field size1" value="<?php echo $selresult['phone']; ?>" name="phone" required />
								</p>	
								<p>
									
									<label>Email Address: <span>(Required Field)</span></label>
									<input type="email" class="field size1" name="email"value="<?php echo $selresult['email']; ?>" required />
								</p>
                                  <p>
									
									<label>ID Number:  <span>(Required Field)</span></label>
									<input type="text" class="field size1"value="<?php echo $selresult['id_no']; ?>"name="id_no" required />
								</p>
								<p>
								
						<p>
									
									<label>Location:  <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" value="<?php echo $selresult['location']; ?>" required />
								</p>
					</p>
					<p>
									
									<label>Username:  <span>(Required Field)</span></label>
									<input type="text" class="field size1" value="<?php echo $selresult['username']; ?>"name="username" required />
								</p>
								
                                   
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="UPDATE" name="send" />
						</div>
						
					</form>
					
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