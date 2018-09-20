
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="production/stylesheet.css">
	<!-- icon -->
	<link rel="icon" href="images/green-chmsc-official-logo.png" > <center>
	<title>real estate management system.</title>
	</center>
	<style>
		.Houseousel-inner > .item > img,
		.Houseousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>
<body> <center>
<a class="navbar-brand" href="#" align ="center">Real Eatate Management System.</a>
</center>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" align="center">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
			</div>

								
							</div>
							<!-- modal body -->
							<div class="modal-body">
							<div class = "row">	
							 
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 alert alert-info">
		<?php
				if(isset($_POST['landlordlogin'])){
					include 'includes/config.php';
					
					$uname = $_POST['l_username'];
					$pass = $_POST['password'];
					
					$query = "SELECT * FROM landlord WHERE l_username = '$uname' AND password = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['l_username'];
						
						$_SESSION['pass'] = $rows['password'];
						
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"landlord/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"index.php\")
									</script>";
					}
				}
			?>
<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  if(isset($_POST['studentlogin'])){
include 'includes/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where username='$username' and password='$password'";
$result = $conn->query($sql);
$num = $result->num_rows;
$rows = $result->fetch_assoc();
if ($num > 0) {    
      
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();


						$_SESSION['username'] = $rows['username'];
						$_SESSION['passord'] = $rows['password'];
header("location:index2.php?user=$username");

    }
 else {
    print '
  <div class="w3-panel w3-red">
    <h3 style="color:red">Error!</h3>
    <p>Account not found in DataBase.</p>
  </div>
';
}
$conn->close();

} ?>
<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  if(isset($_POST['adminlogin'])){
include 'includes/config.php';

$myuser = $_POST['username'];
$mypass = $_POST['password'];

$sql = "SELECT * FROM admin where uname='$myuser' and pass='$mypass'";
$result = $conn->query($sql);
$num = $result->num_rows;
$rows = $result->fetch_assoc();
if ($num > 0) {    
      
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();

						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
header("location:admin/index.php?user=$myuser");

    }
 else {
    print '
  <div class="w3-panel w3-red">
    <h3 style="color:red">Error!</h3>
    <p>Account not found in DataBase.</p>
  </div>
';
}
$conn->close();

} ?>

								<ul class="nav nav-pills" align ="center">
								
									<li class="active"><a data-toggle="pill" href="#home">Client</a></li>
									<li><a data-toggle="pill" href="#menu2">Admin</a></li>
									<li><a data-toggle="pill" href="#menu1">Landlord</a></li>

								</ul>
								<div class="tab-content">
								
									<!-- Department -->
									<div id="home" class="tab-pane fade in active">
										<h3>Client</h3>
										<form method="post" action="index.php">
											<div class="form-group">
												<input type="text" class="form-control" name="username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
											<div class="form-group">
												<button name="studentlogin"class="btn btn-block btn-primary signin-button-department">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									
									<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Landlord</h3>
										<form method="post" action="index.php">
										
											<div class="form-group">
												<input type="text" class="form-control" name="l_username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
											<div class="form-group">
												<button name="landlordlogin" class="btn btn-block btn-primary signin-button-admin">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									</div>
									<!-- Teacher -->
									<div id="menu2" class="tab-pane fade">
										<h3>Admin</h3>
										<form method="post" action="index.php">
											<div class="form-group">
												<input type="text" class="form-control" name="username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="password" placeholder="Password">
											</div>
											<!-- <div class="form-group">
												<input type="password" class="form-control" name="new_password" placeholder="Password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="new_cpassword" placeholder="Password">
											</div> -->
											<div class="form-group">
												<button name="adminlogin"class="btn btn-block btn-primary signin-button-School/Department">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	
		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.Houseousel').Houseousel({
        interval: 3000 //changes the speed
    })
</script>

</body>
</html>