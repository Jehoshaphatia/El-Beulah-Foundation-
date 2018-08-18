<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>El-Beulah Foundation | Home </title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="El-Beulah Foundation, donate, Foundation" />
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
		<div class="header">
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
										<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
										<li class="menu__item"><a href="about.html" class="menu__link">About</a></li> 
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
				<div class="banner-text">
					<h3>Every Girl Is A Seed</h3>
					<a href="#" class="but hvr-rectangle-out">Donate Now</a>
				</div>
			</div>
		</div>
		<!--header-->
		<div class="content">
			<div class="banner-bottom">
				<div class="container">
					<div class="banner-grids">
					<div class="col-md-8 banner-grid1">
							<h2 class="tittle1">Who We Are</span></h2>
							<h5>El-Beulah Foundation is a non-profit organisation with the aim of breeding girls across the globe by Nurturing, Monitoring and placing them in the right part of value to properly integrate them into a successful stream of goals.</h5>
							<p>.</p>
							<a href="about.html" class="button hvr-rectangle-out">Read more</a>
						</div>
						<div class="col-md-4 banner-grid">
							<img src="images/p2.jpg" alt=" " class="img-responsive" />

						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="help-section">
				<div class="container">	
				<h3 class="tittle">Vision Statement</h3>
					<p>Our Vision is to positively inspire over a billion girls across the globe, to attain an altitude of success in their personal goals.</p>
					<!--<div class="help-grids">
						<div class="col-md-4 help-grid">
							<div class="icon">
							<i class="glyphicon glyphicon-bell" aria-hidden="true"></i>
							</div>
							<h4>Adoption Child</h4>
							<p>At the same time, we advocate for laws and policies in the United States that will improve the lives of millions of people around the world.</p>
						</div>
						<div class="col-md-4 help-grid">
							<div class="icon">
							<i class="glyphicon glyphicon-yen" aria-hidden="true"></i>
							</div>
							<h4>Charity Actions</h4>
							<p>At the same time, we advocate for laws and policies in the United States that will improve the lives of millions of people around the world.</p>
						</div>
						<div class="col-md-4 help-grid">
							<div class="icon">
							<i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
							</div>
							<h4>Child Protection</h4>
							<p>At the same time, we advocate for laws and policies in the United States that will improve the lives of millions of people around the world.</p>
						</div>
						<div class="clearfix"></div>
					</div> -->
				</div>	
			</div>	
			<!---Organization-->		
			<div class="organization">
				<div class="container">
					<div class="organization-grids">
						<div class="col-md-8 organization-grid">
							<figure>
						<img src="images/p.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h4>El-Beulah Foundation</h4>
							<p>Our Vision is to positively inspire over a billion girls across the globe, to attain an altitude of success in their personal goals.</p>
						</figcaption>
					</figure>

						</div>
						<div class="col-md-4 organization-grid1">
							<h3 class="tittle">Every Girl Is A Seed</h3>
							<p>.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---Organization-->	
				<!---causes-->
			<!---<div class="causes">
				<div class="container">
					<h3 class="tittle">Our Causes</h3>
					<div class="causes-grids">
						<div class="col-md-3 causes-grid">
							<img src="images/p1.jpg" class="img-responsive" alt=""/>
								<div class="cause-text">
									<h4>Help to get Education</h4>
									<div class="progress-bar orange shine"> <span style="width: 100%"></span> </div>

									<p class="progress-bar-text">Donated: 93.88% / <span>$97,000.00</span></p>
									<a href="donate.html" class="button1 hvr-rectangle-out">Donate Now</a>
								</div>
						</div>
						<div class="col-md-3 causes-grid">
							<img src="images/p2.jpg" class="img-responsive" alt=""/>
								<div class="cause-text">
									<h4>Help to get Education</h4>
									<div class="progress-bar orange shine"> <span style="width: 100%"></span> </div>
										<script>	$(document).ready(function(){ 
												$('.quarter').click(function(){
													$(this).parent().prev().children('span').css('width','50%');
													});
												$('.half').click(function(){
													$(this).parent().prev().children('span').css('width','55%');
													});
												$('.three-quarters').click(function(){
													$(this).parent().prev().children('span').css('width','75%');
													});
												$('.full').click(function(){
													$(this).parent().prev().children('span').css('width','100%');
													});			
											});
												var intervalID = setInterval(function(){getData();}, 100);
												var volumeLevel = 40;
												function getData(){
												  if (volumeLevel==40)
													{
													  volumeLevel=60
													}else if (volumeLevel==60)
													{
													  volumeLevel=40
													}
													$("#soundlevel").children('span').css('width', Math.floor(Math.random() * 100)+'%');
												}
												//@ sourceURL=pen.js
										</script>
									<p class="progress-bar-text">Donated: 93.88% / <span>$97,000.00</span></p>
									<a href="donate.html" class="button1 hvr-rectangle-out">Donate Now</a>
								</div>
						</div>
						<div class="col-md-3 causes-grid">
							<img src="images/p3.jpg" class="img-responsive" alt=""/>
								<div class="cause-text">
									<h4>Help to get Education</h4>
									<div class="progress-bar orange shine"> <span style="width: 100%"></span> </div>

									<p class="progress-bar-text">Donated: 93.88% / <span>$97,000.00</span></p>
									<a href="donate.html" class="button1 hvr-rectangle-out">Donate Now</a>
								</div>
						</div>
						<div class="col-md-3 causes-grid">
							<img src="images/p4.jpg" class="img-responsive" alt=""/>
								<div class="cause-text">
									<h4>Help to get Education</h4>
									<div class="progress-bar orange shine"> <span style="width: 100%"></span> </div>

									<p class="progress-bar-text">Donated: 93.88% / <span>$97,000.00</span></p>
									<a href="donate.html" class="button1 hvr-rectangle-out">Donate Now</a>
								</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div> -->
				<!---causes-->
				<!---statistics-->
			<div class="statistics">
				<div class="container">
					<h3 class="tittle">Foundation Statistics</h3>
					<div class="statistics-grids">
						<div class="col-md-3 statistics-grid">
							<div class="statistics-text">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15' data-delay='.5' data-increment="100">15</div>
								<h5>Outreach</h5>
							</div>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="statistics-text">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5' data-delay='.5' data-increment="100">5</div>
								<h5>Causes</h5>
							</div>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="statistics-text">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5' data-delay='.5' data-increment="100">5</div>
								<h5>Locations</h5>
							</div>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class="statistics-text">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1' data-delay='.5' data-increment="100">1</div>
								<h5>Offices</h5>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!---statistics-->
				<!---testimonials-->
			<div class="testimonials">
				<div class="container">
					<h3 class="tittle">Testimonials</h3>
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider">
								<li>
									<div class="success-img">
										<img src="images/t1.jpg" class="img-responsive" alt=""/>	
									</div>										
										<p>...</p>
										<h4><a href="#">- Name</a></h4>
								</li>
							</ul>
						</div>
					</div>
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