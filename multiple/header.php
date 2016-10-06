<?php 

error_reporting(E_ALL ^ E_NOTICE);

// Include Facebook Class
include_once "lib/class.soy.detectfan.php";

// Create an Inctance of Class
$detect_fan = new MyFanz();

//method to get User is fan?
$liked = $detect_fan->isfan();
//Method to get User information
$data = $detect_fan->info();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HumbleFace - Multipurpose Facebook Template</title>
		
		<!-- Meta -->
		<meta name="description" content="HumbleFace - Multipurpose Facebook Template" />
		<meta name="keywords" content="facebook, humbleface, template, media, creative, restaurant, music, agency" />
		
		<!-- Style css -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/custom.css" />		
		
		<!-- =========== -->
		<!-- Google Font -->
		<!-- =========== -->
				
		<script type="text/javascript">
		
			// 1. Add Google Font name here
			
			WebFontConfig = { google: { families: [ 'Lato',  'Bangers'] } };
			(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
			})();
			
		</script>
		
		<style type="text/css">
		
			/* 2. Add Google Font name here */

			.wf-active {font-family: 'Lato',serif; font-size: 14px;}
			
		</style>

		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<style type="text/css">
			header .boxed a:hover {color:#b37c2a}
			.boxer {margin-top:0} 
			
		</style>
		<![endif]-->
		<!--[if gte IE 9]>
		<style type="text/css">.gradient {filter: none;}</style>
		<![endif]-->
	</head>

	<body class="wf-active">
	<div id='fb-root'></div>

		<div class="container">
			
			<!-- =============== -->
			<!-- Welcome message -->
			<!-- =============== -->
						
			<a class="fancy launch" href="#teaser"></a>
			<div style="display:none">
				<div id="teaser">
				
					<!-- Change your welcome content here -->
					<div class="tcenter">
						<p class="lead themefont themecolor tcenter">Welcome to <i class="icon-mobile"></i> HumbleFace</p>					
						<p>Hi visitor,</p>
						<p>Thank you for visiting our page. Before you proceed, it will be our great pleasure if you can click the <strong class="themecolor">Like!</strong> button on top right corner of this page.</p>
						<p>But you skip it by clicking <a href="#" onclick="$.fancybox.close()" class="themecolor">here</a>.</p>
						<p>Thank you</p>
					</div>
					<!-- End welcome message -->
					
				</div>
			</div>
			
			<!-- ============== -->
			<!-- Header section -->
			<!-- ============== -->

			<header class="row-fluid">
				<div class="span12 clearfix">
				
					<!-- ========== -->
					<!-- Navigation -->
					<!-- ========== -->
										
					<ul class="nav boxed">
					
						<!-- Replace with your page name -->
						<li><a href="index.php"><img src="img/sample/logo.png" alt="LOGO" /></a></li>
						<li><a href="features.php"><i class="icon-down-open-big"></i><br />FEATURES</a></li>
						<li><a href="addons.php"><i class="icon-down-open-big"></i><br />ADD ONS</a></li>
						<li><a href="contact.php"><i class="icon-down-open-big"></i><br />CONTACT</a></li>

						<!-- FB like status -->
						<li class="like">
							<a href="javascript:void(0)">
								<div class="beforelike">
									<i class="icon-up-open-big"></i><br />
									<span class="status">LIKE US</span>
								</div>
								<div class="afterlike">
									<div class="fbimg"></div>
									<div class="liked">Liked <span class="icon-facebook-squared"></span></div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</header>
			
			<!-- =============== -->
			<!-- Content section -->
			<!-- =============== -->

			<section>