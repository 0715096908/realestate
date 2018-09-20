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
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Houses For Hire</h2>
				<h3 class="properties" style="text-align: center">Bed Seater - Single Room - Two-Bedrooms</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM user WHERE username= '$_SESSION[username]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Booking Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="index.php">About Us</a></li>						
						<li><a href="index.php">Contact</a></li>
					</ul>
				</li>

				
				<li class="links">
					<ul>
						<li>OUR House TYPES</li>
						<li><a href="#">Bed Seater</a></li>
						<li><a href="#">Single Room</a></li>
						<li><a href="#">Two Bedroom House</a></li>
						
					</ul>
				</li>

				<li class="about">
					<p>Mount Kenya Real Estate is an organized company that rents Houses  to students at affordable prices.</p>
					<ul>
						<li><a href="http://facebook.com/blairt94/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/Nchiru" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Nchiru" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Blair.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>