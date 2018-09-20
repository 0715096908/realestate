<?php
	include '../includes/config.php';
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$select = mysqli_query($conn,"SELECT * FROM houses WHERE house_id = '$id'") or die(mysqli_error($conn));
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
			Add New Property
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Property</h2>
					</div>
					
					<form action="house_edit.php?id=<?php echo $selresult['house_id'] ?>" method="post" enctype="multipart/form-data">
						
						<div class="form">
  						
								<p>
									
									<label>Property Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="House_type" value="<?php echo $selresult['house_type']; ?>" required="required" />
								</p>
								
								<p>
									<span class="req">Property Image</span>
									<label>House Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" value="<?php echo $selresult['image']; ?>" />
								</p>
								<p>
									
									<label>Property Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" value="<?php echo $selresult['rent_cost']; ?>" required="required" />
								</p>
								<p>
									
									<label>Property Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" value="<?php echo $selresult['location']; ?>" required="required" />
								</p>
								<p>
									
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" value="<?php echo $selresult['location_description']; ?>" required="required" />
								</p>
								<p>
									
									<label>Property Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" value="<?php echo $selresult['max_capacity']; ?>" required="required" />
								</p>	
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="UPDATE" name="send" />
						</div>
						
					</form>
					
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="house_management.php" class="add-button"><span>View Available Properties</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
						<!-- Sort -->
						
						
					</div>
				</div>
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