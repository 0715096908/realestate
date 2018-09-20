<?php 
   
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("includes/config.php");
	$id =$_SESSION['userid'];
	
	
	$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id ='$id'")or die(mysqli_error($conn));
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>real estate management system</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>
body
{
	background-color: purple;
}
#home
{
	float: right;
}
</style>
<body>
	

   
	<center><section class="listings">
		<div id="home">
		<a href="index11.php"><b><font size="20px;"><font color="white">BACK</font></font></b></a>
	</div>
		<div class="wrapper">
			<?php
			include('includes/config.php');	
			if(isset($_GET['id']))
			{	
			$house_id = $_REQUEST['id'];    
			    $sel = "SELECT * FROM houses WHERE house_id = $house_id";
			           
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();				
					    $house_id = $rws['house_id'];	
					    $location = $rws['location'];	
			}
			
                   					
			?><font size="50px;">Your Selections:<br /><br /><br /></h3>
				<form method="post" action="booked.php?id=<?php echo $house_id ?>">
					<table>
						<tr>
							<td>Your Name:</td>
							<td><input type="text" name="fname" value="<?php echo $test ['fname'];?>" readonly="readonly"required></td>
						</tr>		
					<tr>
							<td>Property Number:</td>
							<td><input type="text" name="house" value="<?php echo $rws ['house_id'];?>" readonly="readonly"required></td>
						</tr>						
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location"value="<?php echo $rws ['location'];?>" readonly="readonly" required></td>
						</tr>			
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit"></td>
						</tr>
					</table>
				</form></font>
				
			</ul>
		</div>
	</section>	</center><!--  end listing section  -->
</body>
</html>