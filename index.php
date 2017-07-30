<?php

?>


<!DOCTYPE html>
<html>
<head>
<title>Playing for Peace and Empowerment Initiative</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="NGO, non-profit organization, non-governmental organization, peace, playing, soccer,
football, charity, children, help, kids" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-starts-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-main">
				<div class="col-md-6 header-left">
					<a href="index.html"><h1>Playing for Peace & Empowerment Initiative</h1></a>
				</div>
				<div class="col-md-6 header-right">
					<ul>
						<li><a href="#"><span class="fb"></span></a></li>
						<li><a href="#"><span class="twitter"></span></a></li>
						<li><a href="#"><span class="google"></span></a></li>
						<li><a href="#"><span class="rss"></span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--header-ends--> 
	<!--banner-starts-->
	<div class="bnr">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner1">						
					</div>
				</li>
				<li>
					<div class="banner2">						
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--header-starts-->
	<div class="header-bottom">
	 <div class="fixed-header">
		<div class="container">
			<div class="top-menu">
					<span class="menu"><img src="images/menu-icon.png" alt="" /></span>
					<ul class="nav">
						<li><a class="hvr-bounce-to-right" href="index.php">Home</a></li>
						<li><a href="about.html" class="hvr-bounce-to-right">About</a></li>
						
						<li><a href="projects.html" class="active hvr-bounce-to-right">Projects</a></li>
						<li><a href="gallery.html" class="hvr-bounce-to-right">Gallery</a></li>
						<li><a href="#" class="hvr-bounce-to-right">Blog</a></li>
						<li><a href="support.html" class="hvr-bounce-to-right">Support Us</a></li>
						<li><a href="contact.html" class="hvr-bounce-to-right">Contact</a></li>
					</ul>	
					<!-- script for menu -->
						<script>
						$( "span.menu" ).click(function() {
						  $( "ul.nav" ).slideToggle( "slow", function() {
							// Animation complete.
						  });
						});
					</script>
					<!-- script for menu -->
			</div>
			<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		</div>
	 </div>
	 </div>
	<!--header-ends-->
	<!--welcome-starts-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-top">
				<div class="col-md-4 welcome-left">
					<div class="w-one">
						<div class="col-md-6 w-left">
							<img src="images/w-1.jpg" alt="" />
						</div>
						<div class="col-md-6 w-left">
							<img src="images/w-2.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="w-two">
						<div class="col-md-6 w-left">
							<img src="images/w-3.jpg" alt="" />
						</div>
						<div class="col-md-6 w-left">
							<img src="images/w-4.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-8 welcome-right">
					<h2>Welcome</h2>
					<p>Playing for Peace and Empowerment Initiative Introductory text should enter here.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--welcome-end-->
	<!--help-starts-->
	<div class="help">
		<div class="help-top">
			<div class="help-left">
				<h4>01</h4>
				<div class="tool">
					<a class="tooltips" href="#">
					<span></span></a>
				</div>
			</div>
			<div class="help-right">
				<h3>Support this Project</h3>
				<p>Some text 1</p>
				<p>Some text 2</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="help-btm">
		<img src="images/h-1.jpg" alt="" />
	</div>
	<!--help-end-->
	<!--program-starts-->
	<div class="program">
		<div class="program-top">
			<div class="program-left">
				<h3>Our Mission</h3>
				<p>Some text 3</p>
				<p>some text 4</p>
			</div>
			<div class="program-right">
				<h4>02</h4>
				<div class="tool1">
					<a class="tooltips1" href="#">
					<span></span></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="program-btm">
		<img src="images/h-1.jpg" alt="" />
	</div>
	<!--program-end-->
	<!--testimonials-starts-->
	<div class="testimonials">
		<div class="container">
			<div class="testimonials-top heading">
				<h3>Testimonials</h3>
			</div>
			<div class="testimonials-bottom">
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/t-2.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>Some text 5</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Mr. A</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/t-1.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>Some text 6</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Mr. B</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 testimonials-left">
					<div class="test-left">
						<img src="images/t-3.jpg" alt="" />
					</div>
					<div class="test-right">
						<p>some text 7</p>
						<div class="tool2">
							<a class="tooltips2" href="#">
							<span></span></a>
						</div>
						<h4>Mr. C</h4>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--testimonials-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<h3>Subscribe to Our Newsletter</h3>
					<div class="letter">
						<form>
							<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Overview</h3>
					<ul>
						<li><a href="#">UNICEF info</a></li>
						<li><a href="#">Sponspors info</a></li>
						<li><a href="#">External info</a></li>
						<li><a href="#">Partner's info</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Information</h3>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="support.html">Team Lineup</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="typo.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>	
						<li><a href="support.html">Support Us</a></li>	
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-text">
				<div class="col-md-6 ftr-left">
					<h5><a href="index.php">Playing for Peace and Empowerment Initiative</a></h5>
				</div>
				<div class="col-md-6 ftr-right">
					<p>© 2017 PFPEI.  All Rights Reserved | Design and power by  <a href="#" target="_blank">Steinacoz Creations</a> </p>
				</div>
				<div class="clearfix"></div>				
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-end-->
</body>
</html>