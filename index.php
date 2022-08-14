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
	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
	<!--Navbar-
	<nav>
		<div class="container nav__container">
			<a href="index.php"> <h4>FURSA</h4></a>
			<ul class="nav__menu">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="opportunities.php">Opportunities</a></li>
				<li ><a href="contact.php">Contact</a></li>
				<li ><a href="signin.php">Login</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>
	End of Navbar-->

<!--Header-->
	<header>
		<div class="container header__container">
			<div class="header__left">
				<h1>Select Your Interests to Advance your career</h1>
				<p>Welcome to Fursa, where you can access career development opportunities that are relevant to you by customizing your feed in the opportunities tab!</p>
				<a href="signin.php" class="btn btn-primary">Get Started</a>
			</div>
			
			<div class="header__right">
				<div class="header__right-image">
					<img src="./assets/images/header.svg" alt="">
				</div>
			</div>
		</div>

	</header>
<!--End of header-->
<!--Categories-->
	<section class="categories">
		<div class="container categories__container">
			<div class="categories__left">
				<h1>Categories</h1>
				<p>
					Explore the available categories and learn about exciting career development opportunities in your are of interest! Simply customize your feed in the opportunities tab by selecting the categories you would like to view at the bottom of the page!
				<a href="opportunities.php" class="btn">View More</a>
			</div>
		<div class="categories__right">
			<article class="category">
				<span class="category__icon"><i class="uil uil-dollar-sign-alt"></i></span>
				<h5>Finance and Business</h5>
				<p>Access career development opportunities in Finance and Business</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-processor"></i></span>
				<h5>IT and Engineering</h5>
				<p>Access career development opportunities in IT and Engineering</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-glass-martini-alt"></i></span>
				<h5>Hospitality</h5>
				<p>Access career development Opportunities in Hospitality</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-file-copy-alt"></i></span>
				<h5>Communications</h5>
				<p>Access career development opportunities in communications</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-dumbbell"></i></span>
				<h5>Sports</h5>
				<p>Access career development opportunities within sports.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-film"></i></span>
				<h5>Creative Arts</h5>
				<p>Access career development opportunities for creatives.</p>
			</article>
		</div>
		</div>
	</section>

	<!--End of Categories-->


	<!--FAQs-->
	<section class="faqs">
		<h2>Freqeuntly Asked Questions</h2>
		<div class="container faqs__container">
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>What kind of career development opportunities are available on Fursa?</h4>
					<p>
						Opportunities that are available include internships, job applications, bootcamps, training sessions, networking events and more.
					</p>
				</div>
			</article>
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Can all University students use Fursa to access opportunities?</h4>
					<p>
						At the moment, the use of the Fursa web application is limited to Strathmore students.
					</p>
				</div>
			</article>
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Can anyone share relevant career development opportunities on Fursa?</h4>
					<p>
						To maintain the authenticity of opportunities posted on the platform, only those with admin rights are able to upload, edit and delete opportunities. The contact tab may be used to inform the admins of new opportunities.
					</p>
				</div>
			</article>
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>How do I customize the opportunities displayed to me?</h4>
					<p>
						You may customize the opportunities displayed to you by going to the opportunities tab, scrolling to the bottom and selecting the opportunity categories you would like to access.
					</p>
				</div>
			</article>
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Are all the opportunities posted on Fursa free to access?</h4>
					<p>
						Fursa displays opportunities that are relevant to students within Strathmore and this may include paid events, training sessions and bootcamps.
					</p>
				</div>
			</article>
			<article class="faq">
				<div class="faq__icon"><i class="uil uil-plus"></i></div>
				<div class="question__answer">
					<h4>Does Fursa also handle registration and payment for opportunities posted?</h4>
					<p>
						No, Fursa does not handle registration and payment (where necessary) for opportunities posted. Opportunities are shared with the relevant application links and payment information where applicable.
					</p>
				</div>
			</article>

		</div>
	</section>
	<!--End of FAQs-->

	<!--Footer-->
	<footer>
		<div class="container">
			<div class="sec about__us">
				<h2>About Us</h2>
				<p>Fursa is a web application created to provide students within Strathmore University with access to career development opportunities. The platform allows users to customize their feed in the opportunities tab to access opportunities that are relevant to them.</p>
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
</html>