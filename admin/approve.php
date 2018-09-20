<?php
	include '../includes/config.php';
	$house_id = $_REQUEST['id'];
	$query = "UPDATE houses SET status = 'Approved' WHERE house_id = '$house_id'";

	$result = $conn->query($query) or die(mysqli_error($conn));
	$query1 = mysqli_query($conn, "UPDATE userbook SET status='Approved' WHERE houseid = '$house_id'") or die(mysqli_error($conn));
	if($result AND $query1){
	  ?>
	  <script>
	  window.alert("Request successfully approved");
	  window.location.href="client_requests.php";	  
	  </script>
		<?php
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
