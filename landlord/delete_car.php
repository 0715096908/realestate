<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM Houses WHERE House_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"House Successfully Send\");
					window.location = (\"add_vehicles.php\")
				</script>";
	}
?>
