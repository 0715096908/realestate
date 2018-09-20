
<!DOCTYPE html>
<html lang="en">
<head>
	<title>rael estate management system.</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			<?php

  ?>
				<p style="text-align: center"><font size="10px;"> Welcome </font></p> <?php  $fName=$_SESSION['username']; echo $fName;  ?>
			</section>
			
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
			
						include 'includes/config.php';
						$user=$_SESSION['username'];
						
						$sel = "SELECT * FROM houses where landlord= '$user'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_House.php?id=<?php echo $rws['house_id'] ?>">
						<img class="thumb" src="house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_House.php?id=<?php echo $rws['house_id'] ?>"><?php echo 'House Type: '.$rws['house_type'];?></a>
						</h1>
						<h2>Location: <span class="property_size"><?php echo $rws['location'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	
	
</body>
</html>