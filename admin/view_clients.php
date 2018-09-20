<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToEdit(id){
			if(confirm("Are you sure you want to Edit this request?")){
				window.location.href ='edit1.php?id='+id;
			}
		}
		function sureToDelete(id){
			if(confirm("Are you sure you want to Delete this request?")){
				window.location.href ='delete1.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Requests
			<center><h1><font color="green"><a href="studes.php"><u><b>View Client Details.</b></u></a></font></h1></center>
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Client Requests</h2>
						
					
					</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								
								<th><font color="purple">Client Id</font></th>		
								<th><font color="purple">Full Name</font></th>
								<th><font color="purple">Email</font></th>
								<th><font color="purple">Phone Number</font></th>
								<th><font color="purple">Location</font></th>
								
								
								<th width="110" class="ac"><font color="purple">Admin Action</font></th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM user";

								$result = mysqli_query($conn,$select) or die(mysqli_error($conn));
								while($row = $result->fetch_assoc()){
								
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>	
								<td><h3><a href="#"><?php echo $row['user_id'] ?></a></h3></td>												
								<td><a href="#"><?php echo $row['fname'] ?></a></td>
								<td><a href="#"><?php echo $row['email'] ?></a></td>
								<td><a href="#"><?php echo $row['phone'] ?></a></td>		
                               		<td><a href="#"><?php echo $row['location'] ?></a></td>						
								<td><a href="javascript:sureToEdit(<?php echo $row['user_id'];?>)" class="ico del">Edit</a><a href="javascript:sureToDelete(<?php echo $row['user_id'];?>)" class="ico edit">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						
						
					</div>
					
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> Real Estate Management System</span>
		<span class="right">
			Designed by Blair</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>