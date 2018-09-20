<?php
	include '../includes/config.php';
	$house_id = $_REQUEST['id'];
	$query = mysqli_query($conn,"UPDATE houses SET status='Available' WHERE house_id = '$house_id'");
  
	if($query){
	  ?>
	  <script>
	  window.alert("Property Accepted");
	  window.location.href="house_management.php";	  
	  </script>
		<?php
	?>
		<meta content="4; house_management.php" http-equiv="refresh" />
	<?php
	}
	else 
	{
		 ?>
	  <script>
	  window.alert("Property Status Already Is Accepted");
	  window.location.href="house_management.php";	  
	  </script>
		<?php
	}
?>
