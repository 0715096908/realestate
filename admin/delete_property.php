<?php
	include '../includes/config.php';
	$house_id = $_REQUEST['id'];
		$query = "DELETE FROM properties WHERE house_id = '$house_id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Property Successfully deleted\");
					window.location = (\"manage_property.php\")
				</script>";
	}
?>
