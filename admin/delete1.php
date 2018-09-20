<?php
	include '../includes/config.php';
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query = "DELETE FROM user WHERE user_id = '$id'";
	    $result = $conn->query($query);
	   if($result === TRUE){
		?>
		<script type="text/javascript">
			window.alert("Successfully Deleted");
			window.location.href="view_clients.php";
		</script>>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			window.alert("Not Deleted \n Try Again.");
			window.location.href="view_clients.php";
		</script>>
		<?php
	}
	}
	
?>
