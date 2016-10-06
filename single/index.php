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
						<li><a href="#"><img src="img/sample/logo.png" alt="LOGO" /></a></li>
						<li><a href="#"><i class="icon-down-open-big"></i><br />FEATURES</a></li>
						<li><a href="#"><i class="icon-down-open-big"></i><br />ADD ONS</a></li>
						<li><a href="#"><i class="icon-down-open-big"></i><br />CONTACT</a></li>

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

				<!-- ========== -->
				<!-- First Page -->
				<!-- ========== -->
				<article class="panel" id="first">

					<div class="row-fluid">
						<div class="carousel slide" id="carousel">
							<div class="carousel-inner">
								
								<!-- First slider -->
								<div class="item row-fluid active">
									<div class="span7">
										<h1>Lorem Street Snap</h1>
										<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. </p>
										<p class="tcenter">
											<a href="#"><img src="img/sample/appstore.png" alt="" /></a>
											<a href="#"><img src="img/sample/googleplay.png" alt="" /></a>
										</p>
										
										<div class="row-fluid wborder">
											<div class="span4"><a href="#"><img src="img/sample/demo.png" alt=""/></a></div>
											<div class="span4"><a href="#"><img src="img/sample/demo.png" alt=""/></a></div>
											<div class="span4"><a href="#"><img src="img/sample/demo.png" alt=""/></a></div>
										</div>
										
									</div>
									<div class="span5 tcenter"><img src="img/sample/iphone.png" alt="" /></div>
								</div>

								<!-- Second slider -->
								<div class="item row-fluid">
									<div class="span6"><img src="img/sample/ipad.png" alt="" /></div>
									<div class="span6">
										<h1>Why HumbleFace?</h1>
										<ul>
											<li>Vivamus hendrerit arcu sed erat molestie vehicula.</li>
											<li>Nullam in dui mauris. </li>
											<li>Proin quis tortor orci. </li>
											<li>Donec congue lacinia dui, a porttitor lectus condimentum laoreet.</li>
										</ul>
										
										<blockquote>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. <small>humbleguy</small></blockquote>
										<blockquote>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. <small>calera</small></blockquote>
									
									</div>
								</div>
								
								<!-- Third slider -->
								<div class="item">
									<div class="boxer">
										<a href="http://player.vimeo.com/video/52316073?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ff9933&amp;autoplay=1" class="fancy iframe"><img src="img/sample/vimeo.png" alt="vimeo" width="960" height="539"></a>
										<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio.</p>
									</div>	
								</div>

							</div>
						</div>
					</div>

				</article>

				<!-- =========== -->
				<!-- Second Page -->
				<!-- =========== -->
				<article class="panel" id="second">
					<div class="boxer nano">
						<div class="content">
							<h4 class="themefont themecolor"><i class="icon-tools"></i> Features</h4>
							
							<div class="row-fluid">
								<div class="span4"><img src="img/sample/feat.png" alt="feat" width="276" height="293"></div>
								<div class="span8">
									<p class="lead">Lorem Ipsum HumbleSpace</p>
									<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
									<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
									<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
								</div>
							</div>
							
							<div class="line"></div>
							
							<div class="row-fluid">
								<div class="span8">
									<p class="lead">Download HumbleFace ipsum lorem.</p>
									

									<div class="row-fluid">
										<div class="span4"><img src="img/sample/Ipad-1.png" alt=""></div>
										<div class="span8">
											<p><strong>Discover new favorites</strong></p>
											<p> Curabitur vulputate, <br>ligula lacinia scelerisque tempor, <br>lacus lacus ornare ante</p>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span4"><img src="img/sample/iPad-write.png" alt=""></div>
										<div class="span8">
											<p><strong>Pay hands free</strong></p>
											<p> Curabitur vulputate, <br>ligula lacinia scelerisque tempor, <br>lacus lacus ornare ante</p>
										</div>
									</div>

									<div class="row-fluid">
										<div class="span4"><img src="img/sample/ipad-text.png" alt=""></div>
										<div class="span8">
											<p><strong>Feel like a regular</strong></p>
											<p> Curabitur vulputate, <br>ligula lacinia scelerisque tempor, <br>lacus lacus ornare ante</p>
										</div>
									</div>

								</div>
								<div class="span4"><img src="img/sample/iphone.png" alt="" /></div>
							</div>
							
							<div class="line"></div>
							
							<div class="row-fluid">
								<div class="span7"><img src="img/sample/features.png" alt="features" width="501" height="327"></div>
								<div class="span5">
									<p><strong>Lorem Ipsum HumbleSpace</strong></p>
									<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
									<ul>
										<li>Vivamus hendrerit arcu sed erat molestie vehicula.</li>
										<li>Nullam in dui mauris. </li>
										<li>Proin quis tortor orci. </li>
										<li>Donec congue lacinia dui, a porttitor lectus condimentum laoreet.</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</article>

				<!-- ========== -->
				<!-- Third Page -->
				<!-- ========== -->
				<article class="panel" id="third">
					<div class="boxer nano">
						<div class="content">
							<h4 class="themefont themecolor"><i class="icon-docs"></i> Add Ons</h4>
							<p>Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>

							<!-- Package Row -->
							<div class="row-fluid package">
								<div class="humble-grid clearfix">

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-1">				
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-1"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>	
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-2">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-2"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-3">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-3"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</div>

							<!-- Package Row -->
							<div class="row-fluid package">
								<div class="humble-grid clearfix">

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-4">				
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-4"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>	
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-5">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-5"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-6">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-6"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</div>

							<!-- Package Row -->
							<div class="row-fluid package">
								<div class="humble-grid clearfix">

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-1">				
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-1"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>	
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-2">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-2"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

									<!-- Packages -->
									<section class="span4">
										<div class="humble-item humble-img-3">
											<div class="humble-info-wrap">
												<div class="humble-info">
													<div class="humble-info-front humble-img-3"></div>
													<div class="humble-info-back">
														<h3>Add Ons</h3>
														<p>Sample Casing Custom Design <a href="#">BUY NOW</a></p>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</div>
							<!-- End Package -->

						</div>
					</div>
				</article>
				
				<!-- ========== -->
				<!-- Fourth Page -->
				<!-- ========== -->
				<article class="panel" id="fifth">
					<div class="boxer">
							
							<h4 class="themefont themecolor"><i class="icon-chat"></i> CONTACT US</h4>
							<p>Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel ante a orci tempus eleifend ut et magna. Lorem. <br /><br /></p>

							<div class="row-fluid">
								<div class="span6">
									<!-- Form -->
									<form action="#">
										<p>
											<label for="name">Your name</label>
											<input type="text" id="name" placeholder="John Doe" />
										</p>
										<p>
											<label for="email">Email</label>
											<input type="email" id="email" placeholder="hello@johndoe.com"/>
										</p>
										
										<p>
											<label for="package">Comments</label>
											<textarea name="package" id="package"></textarea>
										</p>
										<p>
											<button class="btn btntheme">Submit Form</button>
											<a href="http://facebook.com/messages/HumbleSpace" class="btn">FB Message</a>
										</p>
									</form>
								</div>

								<div class="span6">

									<!-- Map -->
									<p><a href="img/sample/map.png" class="fancy"><img src="img/sample/string.png" alt=""/></a></p>

									<!-- Address -->
									<address>
										Silicon Valley, 3075A Hansen Way, CA 94304 United States<br />
										<i class="icon-mobile"></i>+99 3636 6699 | <i class="icon-print"></i> +99 3636 6688
									</address>
								</div>
							</div>
					</div>
				</article>
				
				<!-- Template for shorter page -->
				<article class="panel">
					<div class="boxer">
						<!-- YOUR CONTENT -->
					</div>
				</article>
				
				<!-- Template for taller page -->
				<article class="panel">
					<div class="boxer nano">
						<div class="content">
							<!-- YOUR CONTENT -->
						</div>
					</div>
				</article>

			</section>

			<footer class="tcenter">
				<p>&copy; 2012 <i class="icon-mobile"></i>The HumbleFace | All Rights Reserved</p>
				<p><a href="#">Twitter</a> <a href="#">Google+</a> <a href="#">Instagram</a></p>
			</footer>

		</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.1/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/face.js"></script>
	<script type="text/javascript" src="js/script.js?v=1.0"></script>

	<?php if ($liked == false){ ?>
     <script type="text/javascript">
     	$(function(){
     		
     		var pathArray = location.pathname.substring(location.pathname.lastIndexOf('/')+1);
     		if (pathArray == ''){
	     		// Comment this line out if you dont want to use this function
	     		$('.fancy.launch').trigger('click');	
     		}
     		
     	})
     </script>
     <?php } else  {?>
     <script type="text/javascript">
     	$(function(){
     		$('.beforelike').hide();
            $('header li.like a').css({padding : 0, height : 90});
			$('.afterlike').show();
     	})
     </script>
     <?php } ?>

	</body>

</html>
