<?php
	include '../includes/config.php';
	$user_id= $_REQUEST['id'];
		$query = "DELETE FROM user WHERE user_id = '$user_id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully Send\");
					window.location = (\"index.php\")
				</script>";	
	}
?>
