<?php
include 'partials/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fursa Home</title>
	<!--Iconscout CDN-->
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
		<link rel="stylesheet" href="./assets/css/contact.css">
		<link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
	<section class="contact">
		<div class="container contact__container">
			<aside class="contact__aside">
				<div class="aside__image">
					<img src="./assets/images/contact.svg">
				</div>
				<h2>Contact Us</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque maiores eveniet.
				</p>
				<ul class="contact__details">
					<li>
						<i class="uil uil-phone-times"></i>
						<h5>+254714065836</h5>
					</li>
					<li>
						<i class="uil uil-envelope"></i>
						<h5>fursa@gmail.com</h5>
					</li>
					<li>
						<i class="uil uil-location-point"></i>
						<h5>Nairobi, Kenya</h5>
					</li>
				</ul>
				<ul class="contact__socials">
					<li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
					<li><a href="#"><i class="uil uil-instagram"></i></a></li>
					<li><a href="#"><i class="uil uil-twitter"></i></a></li>
					<li><a href="#"><i class="uil uil-linkedin"></i></a></li>
				</ul>
			</aside>

			<form action="https://formspree.io/f/mknydope" method="POST" class="contact__form">
				<div class="form__name">
					<input type="text" name="First Name" placeholder="First Name" required>
					<input type="text" name="Last Name" placeholder="Last Name" required>
				</div>
				<input type="email" name="email address" placeholder="Your Email Adddress" required>
				<textarea name="Message" rows="7" placeholder="Your Message Here" required></textarea>
				<button type="submit" class="btn btn-primary">Send Message</button>
			</form>

		</div>
	</section> 

		<!--Footer-->
		<footer>
			<div class="container">
				<div class="sec about__us">
					<h2>About Us</h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, tempore. Architecto quo obcaecati saepe a aspernatur libero fugit itaque placeat inventore, minima odio dolores ipsa. Illum laborum adipisci est nihil.</p>
				</div>
				<div class="sec quicklinks">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="sec contact__footer">
					<h2>Contact Us</h2>
					<ul class="info">
						<li>
							<span><i class="uil uil-location-pin-alt"></i></span>
							<span>
								Strathmore University<br>
								Ole Sangale Road<br>
								Nairobi
							</span>
						</li>
						<li>
							<span><i class="uil uil-phone"></i></span>
							<p><a href="tel:+254714065836">+254714065836</a><br>
								<a href="tel:+254752052001">+254752052001</a><br></p>
						</li>
						<li>
							<span><i class="uil uil-envelope"></i></span>
							<p><a href="mailto:fursastrath@gmail.com">fursastrath@gmail.com</a><br></p>
						</li>
					</ul>
				</div>
			</div>
		</footer>
		<div class="copyrightText">
			<p>Copyright Ⓒ 2022 Fursa. All Rights Reserved</p>
		</div> 


		<script src="./assets/main.js"></script>
</body>