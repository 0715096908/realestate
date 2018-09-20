<!DOCTYPE html>
<html lang="en">
<head>
	<title>Property Details</title>
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
				<h2 class="caption" style="text-align: center">Find You a house for rent</h2>
				<h3 class="properties" style="text-align: center">Self contain ~Bed Sitter ~Square</h3
			</section>
	</section><!--  end hero section  -->
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM houses WHERE house_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
					$landlord = $resultset['landlord'];
					$phonenumber = $resultset['phonenumber'];
					$fName = $resultset['fName'];
					
			?>
				<li>
					<a href="book_House.php?id=<?php echo $rws['house_id'] ?>">
						<img class="thumb" src="house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_House.php?id=<?php echo $rws['house_id'] ?>"><?php echo 'House Type: '.$rws['house_type'];?></a>
						</h1
						<h2>Location: <span class="property_size"><?php echo $rws['location'];?></span></h2>
					</div>
					
				</li>
				<h3>Landlord Contacts </h3>								
								
<br>
	<?php echo $rws['fName'];?>
	<br>
	<b>
	<?php echo $rws['phonenumber'];?>
	<b>
	<br>
	<?php echo $rws['email'];?>
				
			</ul>
			<h2>Descriptions: <span class="property_size"> </span></h2>
<?php echo $rws['location_description'];?>
		</div>
		
	</section>	<!--  end listing section  -->

</body>
</html>