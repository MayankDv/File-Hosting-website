


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
							<li class="mr-lg-3 mr-2 active"><a href="index.php">Home</a></li>
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
							<li><a href="projects.php">Projects </a> |</li> &nbsp&nbsp &nbsp&nbsp
							<li><a href="feedback.php">feedback</a> |</li> &nbsp&nbsp &nbsp&nbsp
							<li><a href="contact.php">Contact Us </a> </li>
						</ul>
				</nav>
			</div>
			
		</div>
	</div>
</header>
<div class="banner_section" id="home">
	<div class="container">
		<div class="row banner-tops-style">
			<div class="col-lg-8 style-banner">
				 <h2>Freelancer Login Page </h2>
				<form action="lancerlogin2.php" method="POST">
				    <div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control"  id="email" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					</div>
					
					<button type="submit" class="btn btn-success">Submit</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</form>
				
				<a href="forgetPass.php" class="btn button-style mt-sm-5 mt-4">Forget Password</a>
				<a href="login.php" class="btn call mt-sm-5 mt-4"> You are Customer ? </a>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
