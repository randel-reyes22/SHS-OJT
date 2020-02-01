<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home &mdash; Guidance Office Scheduler </title>
	<link rel="icon" href="img/unc_logo.png" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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
	<link rel="stylesheet" href="mainPage/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="mainPage/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="mainPage/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="mainPage/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="mainPage/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="mainPage/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="mainPage/css/owl.carousel.min.css">
	<link rel="stylesheet" href="mainPage/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="mainPage/css/style.css">

	<!-- Modernizr JS -->
	<script src="mainPage/js/modernizr-2.6.2.min.js"></script>
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
					<div id="gtco-logo"><a href="#">Guidance Office Scheduler<em></em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="calendar.php">Scheduler</a></li>
						<li><a href="mainPage/create.php">Create</a></li>
						<li><a href="#bottom">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(video/uncVideo.gif)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Scheduling Students Make Much Easier</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
															<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
							<div class="form-wrap">
								<div class="tab">
								<!--LOGIN FORM-->

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>LOGIN</h3>
											<form method="POST" id="login" action="php/login.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username</label>
														<input type="text" id="username" name="username" class="form-control">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" name="password" id="password" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>


<!--How the calendar works-->

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How Sheduler Works?</h2>
					<h4 style="color: white;">Admin and LF's Only</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Spectate schedules</h3>
						<p>Go to the calendar tab located in the top of the page then spectate the schedules.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Inform student(s) that are need to be consolidated</h3>
						<p>Inform the student(s) when they will be consolidated.</p>
						<h3>Add schedule</h3>
						<p>Double click the cell of the calendar and  add your schedule on the calendar. Wow! you just added a schedule.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Edit time and date schedule</h3>
						<p>Drag and drop the schedule into any cell and click in the day tab and edit the time of the schedule. Wow you just edited your schedule. </p>
						<h3>Delete schedule</h3>
						<p>Easy! Just double click the schedule and some message pops up click ok or cancel.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--LOGO UNC PUT HERE IN THIS SECTION-->
	<div class="gtco-cover gtco-cover-sm" style="background-image: url(mainPage/images/unc_arc.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Nurturing Better Tomorrows for All</h1>
				</div>	
			</div>
		</div>
	</div>

<!--contact details-->	

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
							<li><a href="https://www.facebook.com/thedemocratunc/" target="_blank"><i class="icon-facebook"></i></a></li>
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
	
	<!-- jQuery -->
	<script type="text/javascript">
$.ajax({
    url:"../login.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#login')[0].reset();
     dataTable.ajax.reload();
    }
   });	
	</script>

	<script src="mainPage/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="mainPage/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="mainPage/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="mainPage/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="mainPage/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="mainPage/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="mainPage/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="mainPage/js/jquery.magnific-popup.min.js"></script>
	<script src="mainPage/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="mainPage/js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="mainPage/js/main.js"></script>

	</body>
</html>

