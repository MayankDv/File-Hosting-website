
<?php

session_start();

error_reporting(0);
if(strlen($_SESSION["firstname"])==0)
	{	
		echo "Session is set";
		header('location:login.php');
	}
	else
	{
		
		$custid=$_SESSION["custimpid"] ;
		
?>	


<!DOCTYPE html>
<html lang="en">
<head>
<title>Official Corporate Category Flat Bootstrap Responsive Website Template | Home</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Official Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-inner">
				<h1>
					<a class="navbar-brand logo" href="index.html">
						<span class="fa fa-folder-open-o"></span>Official
					</a>
				</h1>
			</div>
			<div class="nav_section">
				<nav>
					<label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<input type="checkbox" id="drop" />
						<ul class="menu">
							<li class="mr-lg-3 mr-2 active"><a href="mainpage.php">Home</a></li>
							<li class="mr-lg-3 mr-2"><a href="about.php">About</a></li>
							<li class="mr-lg-3 mr-2"><a href="services.php">Services</a></li>
							<li class="mr-lg-3 mr-2 p-0">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle">Technologies <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
							<a href="#">Technologies <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2"/>
							<ul class="inner-dropdown">
								<li><a href="#"> Python</a></li>
								<li><a href="#">Andriod</a></li>
								<li><a href="#">Php</a></li>
								<li><a href="#">Hibernet</a></li>
							</ul>
							</li>
							<li><a href="projects.php">Projects</a> |</li>
							<li><a href="feedback.php">feedback</a> |</li>
							
							<li class="mr-lg-3 mr-2 p-0">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle"> My Profile <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
							<a href="#">My Profile <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2"/>
							<ul class="inner-dropdown">
								<li><a href="change.php"> change password</a></li>
								
							</ul>
							</li>
							
							<li><a href="contact.php">Contact Us </a></li>
						</ul>
				</nav>
			</div>
			
			<div class="buttons mt-lg-0 mt-2">
				<a href="logout.php"> Logout </a>
			</div>

		</div>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner_section" id="home">
	<div class="container">
		<div class="row banner-tops-style">
			<div class="col-lg-8 style-banner">
			    <h2> Welcome <?php echo $_SESSION["firstname"] ?></h2>
					
				<h3 class="text-wh"> Creative Agencies <br> Also tends to Cover</h3>
				<p class="text-li mt-4">Company Overview. Freelancer.com is the world's largest freelancing and crowdsourcing marketplace by number of users and projects. We connect over 32,568,503 employers and freelancers globally from over 247 countries, regions and territories.</p>
				<a href="about.html" class="btn button-style mt-sm-5 mt-4">Know About Us</a>
				<a href="#" class="btn call mt-sm-5 mt-4"> <span class="fa fa-phone" aria-hidden="true"></span> Call: +012 898 909 2317</a>
		</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- banner bottom -->
<section class="banner_bottom py-sm-5 py-4">
	<div class="container py-lg-3">
		<div class="row text-center">
			<div class="col-md-4 how-icon mt-md-0">
				<div class="shadow">
					<div class="grid1-bg">
					</div>
					<span class="fa fa-cogs" aria-hidden="true"></span>
					<div class=" how-grid">
						<h3 class="mt-3">The Creative Agency </h3>
						<p class="mt-3">Integer pulvinar leo idut viver feugiat. Pellentesque libero justo orci fermen tum dolor.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 how-icon1 mt-md-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg1">
					</div>
					<span class="fa fa-headphones" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Experienced Staff </h3>
						<p class="mt-3">Integer pulvinar leo idut viver feugiat. Pellentesque libero justo orci fermen tum dolor.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 how-icon2 mt-md-0 mt-4">
				<div class="shadow">
					<div class="grid1-bg2">
					</div>
					<span class="fa fa-calendar" aria-hidden="true"></span>
					<div class="how-grid">
						<h3 class="mt-3">Development Program</h3>
						<p class="mt-3">Integer pulvinar leo idut viver feugiat. Pellentesque libero justo orci fermen tum dolor.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner bottom -->
	
<!-- how it works -->
<section class="about py-5" id="how">
	<div class="container py-md-5">
		<div class="row about-grids">
			<div class="col-lg-6 about-left">
				<h3 class="heading mb-4">What We Do</h3>
				<p class="mb-3">Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus vel, ultrices in ligula. Nulla
					sollicit sed.</p>
				<img src="images/about.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
				<h4 class="my-3">Freelancer is a global crowdsourcing marketplace </h4>
				<p>Freelancer is a global crowdsourcing marketplace website, which allows potential employers to post jobs that 
				freelancers can then bid to complete. Founded in 2009, its headquarters is located in Sydney, Australia, 
				though it also has offices in Southern California, Vancouver, London, Buenos Aires, Manila, and Jakarta.</p>
				<h5 class="mt-md-4 mt-3 mb-2 how-icon"><span class="fa fa-cubes mr-2"></span>The Best Websites for General Freelance Jobs</h5>
				<p>The Best Websites for General Freelance Jobs. Fiverr. Fiverr gets its name from its site design: every job starts at $5. Upwork.</p>
				<h5 class="my-2 how-icon1"><span class="fa fa-cogs mr-2"></span> Once upon a time, there existed two leading platforms for landing freelance jobs:</h5>
				<p>  oDesk and Elance. CloudPeeps. Indeed. College Recruiter. Freelancer. Guru. ServiceScape.</p>
			</div>
		</div>
	</div>
</section>
<!-- how it works -->

<!-- stats -->

<!-- //stats -->

<!-- Team section -->

<!-- //Team section -->

<!-- text -->

<!-- //text -->

<!-- Blog section -->

<!-- //Blog section -->
		
<!-- brands -->

<!-- brands -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids">
			<div class="col-md-4">
				<div class="footer-grid left">
					<h2 class="logo"><a href="index.html"><span class="fa fa-folder-open-o"></span>Official</a></h2>
				</div>
			</div>
			<div class="col-md-4 middle">
				<p class="btn call"> <span class="fa fa-phone"></span> Call: +012 898 909 2317</p>
			</div>
			<div class="col-md-4 right">
				<!-- to top -->
				<div class="top-icon">
					<a href="#home" class="move-top text-center"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>To Top</a>
				</div>
				<!-- //to top -->
			</div>
		</div>
		<div class="middle mt-3">
			
			<ul class="social mt-4">
				<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
				<li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
			</ul>
		</div>
	</div>
</footer>
<!-- //footer -->

</body>
</html>
<?php
	}
?>