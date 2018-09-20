<?php
include '../includes/config.php';
$house_id = $_GET['id'];
							if(isset($_POST['send'])){

								$house_type = $_POST['House_type'];
								
								$rent_cost = $_POST['hire_cost'];
								$location = $_POST['location'];
								$location_description = $_POST['desc'];
								$max_capacity = $_POST['capacity'];
								
								
								$qr = "UPDATE houses SET house_type='$house_type', rent_cost='$rent_cost',location='$location' , location_description='$location_description', max_capacity='$max_capacity' WHERE house_id = '$house_id'";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res){
									echo "<script type = \"text/javascript\">
											alert(\"Property Updated successfully\");
											window.location = (\"house_management.php\")
											</script>";
									}
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"Property not Updated. Try again.\");
											window.location = (\"house_management.php\")
											</script>";
								}
							}
						?>