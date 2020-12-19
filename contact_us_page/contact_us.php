<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" charset="width-device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<section class="contact">
		<div class="content">
			<h2>CONTACT US</h2>
			<p>Have your dream event handled</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h1>Address</h1>
						<p>Boisar,<br>Palghar,<br>401501</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h1>Phone</h1>
						<p>999-888-2222</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h1>Email</h1>
						<p>eventmanagement@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="contactForm">
				<form id="contact-form" method="post" role="form">
					<h2>Send Message</h2>
					<div class="inputBox">
						<input type="text" name="name" required="required">
						<span>Full Name</span>
					</div>
					<div class="inputBox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<textarea name="message" required="required"></textarea>
						<span>Type your Message...</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="ok" value="Send">
					</div>
				</form>
				<?php
				if(isset($_POST['ok'])){
					include_once 'connection.php';
					$obj=new Contact();
					$res=$obj->contact_us($_POST);
					if($res==true){
						echo "<script>alert('Query Successfully Submitted. Thank You')</script>";
					}else{
						echo "<script>alert('Something Went Wrong!!!')</script>";
					}
				}
				?>
			</div>
		</div>
	</section>

</body>
</html> 