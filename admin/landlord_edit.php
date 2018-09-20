<?php
include '../includes/config.php';
	$user_id = $_GET['id'];
						if(isset($_POST['send'])){
							
							$fname = $_POST['fname'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							
							
							
							
							
							$qry = "UPDATE landlord SET fName='$fname', email='$email', phonenumber='$phone' , l_username='$username' , location='$location' WHERE landlord_id = '$user_id'";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result){
								echo "<script type = \"text/javascript\">
											alert(\"Landlord Details Successfully Updated.\");
											window.location = (\"view_landlords.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Landlord Update Failed. Try Again\");
											window.location = (\"view_landlords.php\")
											</script>";
							}
						}
						
					  ?>