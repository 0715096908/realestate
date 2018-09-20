<?php
	include '../includes/config.php';
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query = "DELETE FROM userbook WHERE houseid = '$id'";
	    $result = $conn->query($query);
	   if($result === TRUE){
		?>
		<script type="text/javascript">
			window.alert("Deleted Successfully");
			window.location.href="client_requests.php";
		</script>>
		<?php
	  
	}
	else
	{
		?>
		<script type="text/javascript">
			window.alert("Not Deleted");
			window.location.href="client_requests.php";
		</script>>
		<?php
	}

	}
	
?>
