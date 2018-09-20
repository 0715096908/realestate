<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		//header("location: ../login.php");
	}
	else{
	$user=$_SESSION['uname'];

	}
?>
<div id="top">
			<h1><a href="#">Real Estate Management System</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $l_username;?></strong></a>										
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="my_houses.php"><span>View Houses</span></a></li>
			    <li><a href="add_house.php"><span>Add House</span></a></li>
			    
				
			    
			</ul>
		</div>