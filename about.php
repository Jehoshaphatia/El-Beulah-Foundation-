<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>El-Beulah Foundation | About</title>
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
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
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
						<h1><a href="index.html">El-Beulah Foundation </a></h1>
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
										<li class="menu__item menu__item--current"><a href="about.html" class="menu__link">About</a></li> 
										<li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li> 
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
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">About Us</h2>
					<p>El-Beulah Foundation is a non-profit organisation with the aim of breeding girls across the globe by Nurturing, Monitoring and placing them in the right part of value to properly integrate them into a successful stream of goals.</p>
					<!--<div class="about-grids">
						<div class="col-md-3 about-grid">
							<div class="about1">
								<div class="ions">
									<i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
								</div>
								<h4>Vestibulum</h4>
								<p>Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl </p>
							</div>
						</div>
						<div class="col-md-3 about-grid">
							<div class="about1">
								<div class="ions">
								<i class="glyphicon glyphicon-leaf" aria-hidden="true"></i>
								</div>
								<h4>Sollicitudin</h4>
								<p>Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl </p>
							</div>
						</div>
						<div class="col-md-3 about-grid">
							<div class="about1">
								<div class="ions">
									<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
								</div>
								<h4>Ultricaretra </h4>
								<p>Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl </p>
							</div>
						</div>
						<div class="col-md-3 about-grid">
							<div class="about1">
								<div class="ions">
									<i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
								</div>
								<h4>Donate Now</h4>
								<p>Phasellus facilisis mauris vel velit molestie pellentesque. Donec rutrum, tortor ut elementum venenatis, purus magna bibendum nisl </p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div> -->
				</div>
			</div>
			<!--about-->
			<!--vision-->
				<div class="vision">
					<div class="container">
						<h3 class="tittle">Our vision is to inspire girls</h3>
						<div class="vision-img">
						<img src="images/a.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="vision-grids">
							<div class="col-md-4 vision-grid">
								<h4>Who We Are</h4>
								<p>El-Beulah Foundation is a non-profit organisation with the aim of breeding girls across the globe by Nurturing, Monitoring and placing them in the right part of value to properly integrate them into a successful stream of goals.</p>
								<div class="vision-img1">
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
								</div>
							</div>
							<div class="col-md-4 vision-grid">
							<h4>Our vision</h4>
								<p>Our Vision is to positively inspire over a billion girls across the globe, to attain an altitude of success in their personal goals.</p>
								<div class="vision-img1">
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
								</div>
							</div>
							<div class="col-md-4 vision-grid">
							<h4>Our History</h4>
								<p>...</p>
								<div class="vision-img1">
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--vision-->
			<div class="team">
				<div class="container">
					<h3 class="tittle">Our Teams</h3>
					<!--<div class="team-grids">
						<div class="col-md-3 team-gd">
							<img src="images/t4.jpg" class="img-responsive" alt="">
							
								<h4>Patrick pool</h4>
									<span>Executive Director</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu euismod risus, eget sodales nulla. Phasellus justo quam, ullamcorper convallis erat ut.</p>
								<div class="social-icons">
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>
									<a href="#"><i class="icon4"></i></a>
							</div>
						</div>
						<div class="col-md-3 team-gd">
							<img src="images/t5.jpg" class="img-responsive" alt="">
									<h4>Victoria</h4>
									<span>Technical Director</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu euismod risus, eget sodales nulla. Phasellus justo quam, ullamcorper convallis erat ut.</p>
								<div class="social-icons">
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>
									<a href="#"><i class="icon4"></i></a>
							</div>
						</div>
						<div class="col-md-3 team-gd">
							<img src="images/t6.jpg" class="img-responsive" alt="">
								<h4>Thomson</h4>
									<span>Program Officer</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu euismod risus, eget sodales nulla. Phasellus justo quam, ullamcorper convallis erat ut.</p>
								<div class="social-icons">
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>
									<a href="#"><i class="icon4"></i></a>
							</div>
						</div>
						<div class="col-md-3 team-gd">
							<img src="images/t7.jpg" class="img-responsive" alt="">
								<h4>Mary Doe</h4>
								<span>Director of Development</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu euismod risus, eget sodales nulla. Phasellus justo quam, ullamcorper convallis erat ut.</p>
								<div class="social-icons">
									<a href="#"><i class="icon1"></i></a>
									<a href="#"><i class="icon2"></i></a>
									<a href="#"><i class="icon3"></i></a>
									<a href="#"><i class="icon4"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
								-->
				</div>
			</div>
			<div class="partner">
				<div class="container">
					<h3 class="tittle"> Our Partner</h3>
					<div class="partner-grids">
						<div class="col-md-3 partner-grid">
							<div class="partners">
								<div class="partner-left">
									<i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i>
								</div>
								<div class="partner-right">
									<h4>company name</h4>
									<p>company description</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-3 partner-grid">
							<div class="partners">
								<div class="partner-left">
									<i class="glyphicon glyphicon-certificate" aria-hidden="true"></i>
								</div>
								<div class="partner-right">
									<h4>company name</h4>
									<p>company description</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-3 partner-grid">
							<div class="partners">
								<div class="partner-left">
									<i class="glyphicon glyphicon-star" aria-hidden="true"></i>
								</div>
								<div class="partner-right">
									<h4>company name</h4>
									<p>company description</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-3 partner-grid">
							<div class="partners">
								<div class="partner-left">
									<i class="glyphicon glyphicon-asterisk" aria-hidden="true"></i>
								</div>
								<div class="partner-right">
									<h4>company name</h4>
									<p>company description</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
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