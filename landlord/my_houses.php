<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Property Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">All Properties</h2>						
					</div>	
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<font color="purple">
								<th><font color="purple">Property id</font></th>
								<th><font color="purple">Property type</font></th>
								
								<th><font color="purple">Cost</font></th>
								<th><font color="purple">Property Location</font></th>
								<th><font color="purple">Location Description</font></th>
								<th><font color="purple">Maximum Capacity</font></th>
								<th><font color="purple">Property Status</font></th>
								<th><font color="purple">Property Image</font></th>
								<th><font color="purple">Landlord Name</font></th>
								<th><font color="purple">Landlord Contact</font></th>
							

							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM houses";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><?php echo $row['house_id'] ?></h3></td>
								<td><h3><?php echo $row['house_type'] ?></h3></td>
								
								<td><?php echo $row['rent_cost'] ?></td>
								<td><?php echo $row['location'] ?></td>
								<td><?php echo $row['location_description'] ?></td>	
								<td><?php echo $row['max_capacity'] ?></td>	
								<td><?php echo $row['status'] ?></td>
								<td><img class="thumb" src="../house_images/<?php echo $row['image'];?>" width="200" height="200"></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['contact'] ?></td>
								
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
			
			<!-- Sidebar -->
			
	
</body>
</html>