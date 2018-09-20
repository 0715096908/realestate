<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Landlord Home</title>
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
			Add New Houses
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Houses</h2>
					</div>
					
					<form action="new_house.php" method="post" enctype="multipart/form-data">
						
						<div class="form">
								
                                 <p>
									<span class="req">max 100 symbols</span>
									<label>Landlord <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="landlord" required />
								</p>	
                                  <p>
									<span class="req">max 100 symbols</span>
									<label>Phone Number of Landlord <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="phone" required />
								</p>
                                   <p>
									<span class="req">max 100 symbols</span>
									<label>Full Name of the landlord <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="fname" required />
								</p>									
								<p>
									<span class="req">max 20 symbols</span>
									<label>House Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="House_type" required />
								</p>
								
								<p>
									<span class="req">Current Images</span>
									<label>House Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>House Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" required />
								</p>
								<p>
									<span class="req">In Terms of number of occupants</span>
									<label>House Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../house_images/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								
								$landlord = $_POST['landlord'];
								$phonenumber = $_POST['phone'];
								$fName = $_POST['fname'];
								$house_type = $_POST['House_type'];
								
								$rent_cost = $_POST['hire_cost'];
								$location = $_POST['location'];
								$location_description = $_POST['desc'];
								$max_capacity = $_POST['capacity'];
								
								
								$qr = "INSERT INTO houses (landlord,phonenumber,fName,house_type,image,rent_cost,location,location_description,max_capacity,status) 
													VALUES ('$landlord','$phonenumber','$fName','$house_type','$image','$rent_cost','$location','$location_description','$max_capacity','Available')";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res>0){
									echo "<script type = \"text/javascript\">
											alert(\"House added successfully\");
											window.location = (\"new_house.php\")
											</script>";
									}
								}
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"House not added. Try again.\");
											window.location = (\"new_house.php\")
											</script>";
								}
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="my_houses.php" class="add-button"><span>View Our Houses</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="delete_car.php">Delete Selected</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Sort by</label>
							<select class="field">
								<option value="">House Type</option>
							</select>
							<select class="field">
								<option value="">House Name</option>
							</select>
							<select class="field">
								<option value="">House Price</option>
							</select>
						</div>
						
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