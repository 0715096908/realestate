<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">

		function sureToDelete(id){
			if(confirm("Are you sure you want to delete this Home Page Property?")){
				window.location.href ='delete_property.php?id='+id;
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
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Home Page Property Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Home Page Properties</h2>						
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
								<th width="110" class="ac"><font color="purple">Admin Action</font></th>

							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM properties";
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
								<td><a href="javascript:sureToDelete(<?php echo $row['house_id'];?>)" class="ico del"><font color="red">Delete</font></a></td>
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