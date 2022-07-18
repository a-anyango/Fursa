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
	<!--Navbar-->
	<nav>
		<div class="container nav__container">
			<a href="index.php"> <h4>FURSA</h4></a>
			<ul class="nav__menu">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="opportunities.php">Opportunities</a></li>
				<li ><a href="contact.php">Contact</a></li>
				<li ><a href="./login_management/login.php">Login</a></li>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>
	<!--End of Navbar-->
<!--Header-->
	<header>
		<div class="container header__container">
			<div class="header__left">
				<h1>Select Your Interests to Advance your career</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="opportunities.php" class="btn btn-primary">Get Started</a>
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
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				</p>
				<a href="#" class="btn">Learn More</a>
			</div>
		<div class="categories__right">
			<article class="category">
				<span class="category__icon"><i class="uil uil-dollar-sign-alt"></i></span>
				<h5>Finance and Business</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-processor"></i></span>
				<h5>IT and Engineering</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-glass-martini-alt"></i></span>
				<h5>Hospitality</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-file-copy-alt"></i></span>
				<h5>Communications</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-dumbbell"></i></span>
				<h5>Sports</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>

			<article class="category">
				<span class="category__icon"><i class="uil uil-film"></i></span>
				<h5>Creative Arts</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>
		</div>
		</div>
	</section>
</body>
</html>