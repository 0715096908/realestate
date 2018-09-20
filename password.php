<?php 
   
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("includes/config.php");
	$id =$_SESSION['userid'];
	
	
	$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id ='$id'")or die(mysqli_error($conn));
	$test = mysqli_fetch_array($result);
?>
<?php
			include('includes/config.php');	
			
						if(isset($_GET['id']) AND isset($_POST['change']))
						{
							$id = $_GET['id'];
							
						   
						    //$id = $_GET['id'];
							include 'includes/config.php';
						    $opass = md5($_POST['opass']);
							$npass = md5($_POST['npass']);				
							$cpass = md5($_POST['cpass']);
						if($npass == $cpass)
						{
							$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$id'") or die(mysqli_error($conn));
							$result = mysqli_fetch_array($query);
							$password = $result['password'];

							if($password == $opass)
							{
								$result = mysqli_query($conn,"UPDATE user SET password = '$npass' WHERE user_id = '$id'") or die(mysqli_error($conn));
								if($result)
								{
									?>
									<script type="text/javascript">
										window.alert("Password changed successfully");
                                        window.location.href="cpass.php";
									</script>
									<?php
								}
								else
								{
									?>
									<script type="text/javascript">
										window.alert("Password Not Changed. \n Please Try Again");
                                        window.location.href="cpass.php";
									</script>
									<?php
								}
							}
							else
							{
								?>
									<script type="text/javascript">
										window.alert("Old Password Don't Match. \n Please Try Again");
                                        window.location.href="cpass.php";
									</script>
									<?php
							}
						}
						else
						{
						?>
									<script type="text/javascript">
										window.alert("Passwords Don't Match");
                                        window.location.href="cpass.php";
									</script>
									<?php	
						}
							
							}
							
							
						
						
					  ?>