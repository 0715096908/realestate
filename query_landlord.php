<html>
<body>
<?php
require_once 'book_House.php';
include 'includes/config.php';
<?php $sel = "SELECT * FROM landlord where l_username='$_GET[landlord]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
?>
?>
<br>
	<?php echo $rws['fName'];?>
	<br>
	<b>
	<?php echo $rws['phonenumber'];?>
	<b>
	<br>
	<?php echo $rws['email'];?>
	
	
	</body>
	</html>
