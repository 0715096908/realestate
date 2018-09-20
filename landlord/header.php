<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapperm" style="color:green">
				<h1 class="logo">Real Estate Management System.</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>						
						<li><a href="landlord.php">Landlord</a></li>
						
					</ul>
					<a href="account.php">Client Login</a>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="add_house.php">Add house</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>