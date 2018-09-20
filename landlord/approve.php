<?php
	include '../includes/config.php';
	$house_id = $_REQUEST['id'];
	$query = "UPDATE houses SET status = 'Approved' WHERE house_id = '$house_id'";
	$result = $conn->query($query);
	if($result === TRUE){
		?>
		<script>
		window.alert("Request successfully approved.");
		</script>
		<?php
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
	
		
?>
