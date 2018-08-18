<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>El-Beulah Foundation | Gallery</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Voluntary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, sony ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->

<!--web-font-->
<link href='//fonts.googleapis.com/css?family=Carter+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--web-font-->
</head>
<body>
<!--header-->
		<div class="header head">
			<div class="container">
				<div class="heder-top">
					<div class="logo">
						<h1><a href="index.html">Voluntary</a></h1>
					</div>
					<div class="header-right">
						<div class="shy-menu">
							<a class="shy-menu-hamburger">
								<span class="layer top"></span>
								<span class="layer mid"></span>
								<span class="layer btm"></span>
							</a>
							<div class="shy-menu-panel">
								<nav class="menu menu--horatio">
									<ul class="menu__list">
										<li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
										<li class="menu__item"><a href="about.html" class="menu__link">About</a></li> 
										<li class="menu__item menu__item--current"><a href="gallery.html" class="menu__link">Gallery</a></li> 
										<li class="menu__item"><a href="contact.html" class="menu__link">Contact</a></li>
									</ul>
								</nav>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="menu open">
						  <a class="hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						  </a>
						</div>
						<script>
							$(function() {
								
								initDropDowns($("div.shy-menu"));

							});

							function initDropDowns(allMenus) {

								allMenus.children(".shy-menu-hamburger").on("click", function() {
									
									var thisTrigger = jQuery(this),
										thisMenu = thisTrigger.parent(),
										thisPanel = thisTrigger.next();

									if (thisMenu.hasClass("is-open")) {

										thisMenu.removeClass("is-open");

									} else {			
										
										allMenus.removeClass("is-open");	
										thisMenu.addClass("is-open");
										thisPanel.on("click", function(e) {
											e.stopPropagation();
										});
									}
									
									return false;
								});
							}
						</script>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		<!--header-->
		<div class="content">
			<div class="gallery">
				<div class="container">
					<h2 class="tittle">Gallery</h2>
					<div class="gal-btm">
						<div class="col-md-4 gal-gd text-center wow fadeInDownBig animated animated" data-wow-delay="0.4s">
							<a href="images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/1.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInUpBig animated animated" data-wow-delay="0.4s">
							<a href="images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/2.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/3.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 gal-gd-sec text-center wow fadeInDownBig animated animated" data-wow-delay="0.4s">
							<a href="images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/4.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 gal-gd-sec text-center wow fadeInUpBig animated animated" data-wow-delay="0.4s">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/5.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/6.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInDownBig animated animated" data-wow-delay="0.4s">
							<a href="images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/7.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInRight animated animated" data-wow-delay="0.4s">
							<a href="images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/8.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/9.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/10.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/10.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/11.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/11.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/12.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/12.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/13.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/13.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/14.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/14.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/15.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/15.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/16.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/16.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/17.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/17.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/18.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/18.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/19.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/19.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/20.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/20.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/21.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/21.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/22.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/22.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/23.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/23.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/24.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/24.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/25.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/25.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/26.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/26.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/27.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/27.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/28.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/28.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/29.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/29.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/30.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/30.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/31.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/31.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/32.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/32.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/33.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/33.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 gal-gd text-center wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<a href="images/34.jpg" class="b-link-stripe b-animate-go  swipebox">
								<div class="gallery-gal-effect slow-zoom horizontal">
									<div class="img-box"><img src="images/34.jpg" alt=" " /></div>
										<div class="gallery-text-box">
											<div class="gallery-gal-text">
												<h4>El-Beulah Foundation</h4>
												<span class="separator"></span>
												<p>Inspire over a billion girls across the globe, to attain an altitude of success in their personal goals</p>
												<span class="separator"></span>
											</div>
										</div>
								</div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!---footer-->
		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<h4>Newsletter</h4>
						<p>Do you want to be the first to know about the good things we're doing? Sign up to our Newsletter</p>
						<form action="#" method="post">
							<input type="text" name="Email" placeholder="enter email address" required>
							<input type="submit" value="Go">
						</form>
					</div>
					<div class="col-md-4 footer-grid">
					<h4>links</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact us</a></li>
					</ul>
					</div>
					<div class="col-md-4 footer-grid">
						<h4>El-Beulah Foundation</h4>
						<p>El-Beulah Foundation is a non-profit organisation with the aim of breeding girls across the globe by Nurturing, Monitoring and placing them in the right part of value to properly integrate them into a successful stream of goals.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!---footer-->
	<!---copy-->
		<div class="copy-section">
			<div class="container">
				<div class="social-icons">
					<a href="#"><i class="icon1"></i></a>
					<a href="#"><i class="icon2"></i></a>
					<a href="#"><i class="icon3"></i></a>
					<a href="#"><i class="icon4"></i></a>
				</div>
				<div class="copy">
					<p>&copy; 2018  El-Beulah Foundation . All rights reserved | Design by <a href="http://jehoshaphatia.com">Jehoshaphat</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!---copy-->

</body>
</html>