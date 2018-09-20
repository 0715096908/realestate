<?php
include '../includes/config.php';
	$user_id = $_GET['id'];
						if(isset($_POST['send'])){
							
							$fname = $_POST['fname'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$id_no = $_POST['id_no'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							
							
							
							
							
							$qry = "UPDATE user SET fname='$fname', email='$email', id_no='$id_no', phone='$phone' , Username='$username' , location='$location' WHERE user_id = '$user_id'";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result){
								echo "<script type = \"text/javascript\">
											alert(\"Client Details Successfully Updated.\");
											window.location = (\"view_clients.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Client Update Failed. Try Again\");
											window.location = (\"view_clients.php\")
											</script>";
							}
						}
						
					  ?>