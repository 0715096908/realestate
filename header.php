<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapperm" style="color:green">
				<center><h1 class="logo"><b><font color="white">REAL ESTATE MANAGEMENT SYSTEM</font></b></h1></center>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['username'] && (!$_SESSION['pass'])){
					?>
									
						
						<div>
					</ul>					
                    <a href="logout.php"><font color="green"><font size="5px;"><u>Logout</u></font></a>  					
					
					
					</div>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="add_house.php">Add Property</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php"><font color="white">Logout</font></a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>