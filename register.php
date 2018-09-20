<?php
include 'includes/config.php';
						if(isset($_POST['submit'])){
							
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$gender = $_POST['gender'];
							$location = $_POST['location'];
							$username = $_POST['username'];
							$password = md5($_POST['password']);
							
							
							
							
							$qry = "INSERT INTO user(fname, email, phone, username, password, location, gender) VALUES ('$fname','$email','$phone','$username','$password','$location','$gender')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Client Successfully Registered.\");
											window.location = (\"	index.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Client Registration Failed. Try Again\");
											window.location = (\"index.php\")
											</script>";
							}
						}
						
					  ?>