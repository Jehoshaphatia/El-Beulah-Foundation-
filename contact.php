<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>El-Beulah Foundation | Contact</title>
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
						<h1><a href="index.html">El-Beulah Foundation</a></h1>
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
										<li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li> 
										<li class="menu__item menu__item--current"><a href="contact.html" class="menu__link">Contact</a></li>
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
			<div class="contact">
				<div class="container">
					<h2 class="tittle">Contact</h2>	
						<div class="contact-grids">
							<div class="col-md-6 contact-grid">
								<h4 class="tittle1">Contact information</h4>
								<span>You want toget in touch? We are super ready to hear you</span>
								<div class="contct-top">
									<div class="col-md-6 contact-left">
										<h5>Contact Address</h5>
											<ul>
											  <li>41 James Robertson street</li>
											  <li><a href="mailto:#">Email</a></li>
											  <li>+2348065768875</li>
											</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 contact-grid1">
								<div class="contact-top1">
									<h4 class="tittle1">Get in Touch</h4>
									<form action="#" method="post">
									<div class="form-group">
									<label for="name">First Name*</label>
										<input type="text" name="Name" placeholder="First Name" required>
									</div>
									<div class="form-group">
									<label for="name">E-mail*</label>
										<input type="text" name="E-mail" placeholder="E-mail" required>
									</div>
									<div class="form-group">
									<label for="name">Contact Us Regarding*</label>
										<select class="sel">
											<option value="General inquiry">General inquiry</option>
											<option value="Donation">Donation</option>
											<option value="Event">Event</option>
										
										<select>
									</div>
									<div class="form-group">
									<label for="name">Message*</label>
										<textarea placeholder name="Message"></textarea>
									</div>
									<input type="submit" value="Send">
									</form>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.163491506861!2d3.3515713141277867!3d6.50097682522993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c1676d9c09f%3A0x1c5e966a722a9711!2s41+James+Robertson+Rd%2C+Surulere%2C+Lagos!5e0!3m2!1sen!2sng!4v1534604595468" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
	<!--contact-->
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