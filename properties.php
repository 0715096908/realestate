<?php 
	require("includes/config.php");
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
	<style type="text/css">
		.home
		{
			float: right;
		}
	</style>
</head>
<body>
<div class="home">
	<a href="index.php"><font color="purple"><b><u>BACK</u></b></font></a>
</div>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><font color="blue">A Look Into Some of Our Properties</font></h2>
				<marquee><h3 class="properties" style="text-align: center"><font color="purple">Different Types of Properties At Your Fingertip. Register and Book Now</font></h3></marquee>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM properties";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
							
			?>
				<li>
					<a href="#">
						<img class="thumb" src="house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo ''.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="#"><?php echo 'Property Type: '.$rws['house_type'];?></a>
						</h1>
						<h2><font color="purple">Location:</font> <span class="property_size"><?php echo $rws['location'];?></span></h2>
						<h1>
							<a href="#"><font color="purple"><?php echo 'Property Description:</font> '.$rws['location_description'];?></a>
						</h1>
						<h1>
							<a href="index.php"><button><font color="blue">Register and Book Now</font></button></a>
						</h1>
						
						
						

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