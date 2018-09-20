<?php 
		include 'includes/config.php';
		$error = "";

		if (isset($_POST['log'])) 
		{ 			
			$username = trim($_POST['username']);			
			$password = md5(trim($_POST['password']));	
				
			// sending query		
			$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = 
						   '$password'");
						   
			if (!$result) 
			{
				die("Query to show fields from table failed");
			}
									
			$numberOfRows = mysqli_num_rows($result);				
			$row = mysqli_fetch_array($result);					
				
				if ($numberOfRows == 0) 
				{
					
					?>
					<script type="text/javascript">
						window.alert("Invalid username or password");
						window.location.href="index.php";
					</script>>

					<?php

				} 
				else if ($numberOfRows > 0) 
				{
					session_start();					
					$_SESSION['is']['login']    = TRUE;
					$_SESSION['is']['username'] = $_POST['username'];
					$_SESSION['userid']=$row['user_id'];
					$_SESSION['logged']="true";
					$session = "1";	
							
				header("location:index11.php?user=$username");				 	
				}
		}
	?>