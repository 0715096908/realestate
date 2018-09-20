<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['username'];
					$pass = $_POST['password'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						?>
					<script type="text/javascript">
						window.alert("Invalid username or password");
						window.location.href="adminlogin.php";
					</script>>

					<?php
					}
				}
			?>