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
		.txt{
			width: 600px;
			height: 200px;
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
	</section><!--  end hero section  -->
	<center><section class="listings">
		<div class="wrapper">
		<center><h2 style="text-decoration:underline">Message Admin Here</h2></center>
			<ul class="">
			<form method="post" action="message_admin.php">
				<table>
				<tr>
				<td>Your full name:</td>
				<td><input type="text" name="fname" required="required"></td>
				</tr>
				<tr>
				<td>Your email address:</td>
				<td><input type="email" name="email" required="required"></td>
				</tr>
				<tr>
				<td>Your Phone number:</td>
				<td><input type="text" name="phone" required="required"></td>
				</tr>
					<tr>
						<td>Enter your message:</td>
							<td><textarea name="message" class="txt" placeholder="Enter your message here"></textarea></td>
						</td>
					</tr>
					<tr>
					<td><input type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						$name = $_POST['fname'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,status,name,email,phone)
							VALUES('$message','Unread','$name','$email','$phone')";
							$result = mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Your message has been successfully sent. You will get a reply once the message is processed.\");
											window.alert(\"Note that your message is protected.\");
											window.location =(\"message_admin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section></center>	<!--  end listing section  -->

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
						<li><a href="#">BedSeaters</a></li>
						<li><a href="#">Single Rooms</a></li>
						<li><a href="#">Double Rooms</a></li>
						
					</ul>
				</li>

				<li class="about">
					<p>Nchiru Rescue team is an organized company that rents Houses to students at affordable costs.</p>
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
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Duncan.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>