<?php 
	session_start();
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}
	require("includes/config.php");
	$id =$_SESSION['userid'];
	$result = mysqli_query($conn,"SELECT * FROM user WHERE user_id ='$id'") or die(mysqli_error($conn));
	$test = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>real estate management system.</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
	<script>
	/*$('#search').keyup(function()
	{
		var searchterm=$('#search').val();
		if(searchitem!='')
		{
			$.post('search.php',{searchterm:searchterm}, function(data))
		        {
					$('#searchresults').html(data);
				});
		}
	else
	{
		$.('#searchresults').html('');
	}
	});
	
	</script>
</head>
<body>
		<?php
			include 'header3.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><font color="blue">This is The Best Place To Find A Property of Your Choice</font></h2>
				<h2 class="title"><a href="#">Welcome Client: <?php echo $test['fname'] . "" ?>! </a></h2>
				
				<h3 class="properties" style="text-align: center"><font color="purple">Different Types of Properties At Your Fingertip. Book Now</font></h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM houses WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
							
			?>
				<li>
					<a href="book_House.php?id=<?php echo $rws['house_id'] ?>">
						<img class="thumb" src="house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo ''.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_house.php?id=<?php echo $rws['house_id'] ?>"><?php echo 'Property Type: '.$rws['house_type'];?></a>
						</h1>
						<h2><font color="purple">Location:</font> <span class="property_size"><?php echo $rws['location'];?></span></h2>
						
						
						

					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	
<!--  end listing section  -->

	
	
</body>
</html>