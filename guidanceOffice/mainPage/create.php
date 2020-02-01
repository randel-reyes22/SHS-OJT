<?php session_start(); ?>

<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create &mdash; Guidance Office Scheduler</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<link rel="icon" href="../img/unc_logo.png" >

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="../index.php">Guidance Office Scheduler<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../calendar.php">Scheduler</a></li>
						<li><a href="#">Create</a></li>
						<li><a href="#bottom">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Contact the administrator to create an account.</span>
							<h1>Create Account</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">


					<div class="col-md-6 animate-box">
					<h3>Create Account</h3>
					<form action="../php/register.php" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="admin password">Admin Password</label>
								<input type="password" id="adminpass" name="adminpass" class="form-control" placeholder="Admin password">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Username</label>
								<input type="text" id="username"  name="username" class="form-control" placeholder="Your username">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Password</label>
								<input type="password" id="psw" name="psw" class="form-control" placeholder="Your password">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="confirm password">Confirm Password</label>
								<input class="form-control" type="password" name="regpassword" id="regpassword" placeholder="Confirm password" required onkeyup="checkPass(); return false;" /> <span id="check" class="confirmMessage"></span>

							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Create Account" name="signUp" id="signUp" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li><a href="#"><i class="icon-phone"></i> +63 912 886 6881</a></li>
							<li><a href="#"><i class="icon-phone"></i> +63 999 517 0929</a></li>
							<li><a href="#"><i class="icon-mail2"></i> roda.roadel@unc.edu.ph </a></li>
							<li><a href="#"><i class="icon-mail2"></i> kristine.siscar@unc.edu.ph</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>
<a id="bottom"></a>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3 style="text-align: justify;">About This</h3>
						<p style="text-align: justify;">This web page is to make the scheduling much easier. This will help the UNC SHS Department Guidance office to schedule an appointment for counselling or agenda related in guiding a students behavior. This will also serve as reports compilation of every students cases so that the guidance office will be organized in their reports of every students case. The web page will also provide a students profiling meaning every student have their profile so that the guidance counselor will have a background on the student case.</p>
					</div>
				</div>


				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +63 912 886 6881</a></li>
							<li><a href="#"><i class="icon-phone"></i> +63 999 517 0929</a></li>
							<li><a href="#"><i class="icon-mail2"></i> roda.roadel@unc.edu.ph </a></li>
							<li><a href="#"><i class="icon-mail2"></i> kristine.siscar@unc.edu.ph</a></li>
						</ul>
					</div>
				</div>

			</div>
<a id="bottom"></a>
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">Designed by Group 2 UNC ICT-CP Students</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!--check password match-->
	<script src="../js/checkpass.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

