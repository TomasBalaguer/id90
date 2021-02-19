
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo APP_NAME ?></title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="./public/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="./public/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="./public/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- //online-fonts -->

<!-- js -->
<script type="text/javascript" src="./public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="./public/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="agile-top-header">
	<div class="banner-agile-top">
		<div class="number">
		</div>
				<div class="top-icons">
				<ul>
					<li><a href="./auth/logout"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
	</div>
		<div class="logo">
			<h1><a href="index.html">Id<span>90</span></a></h1>
		</div>
		<!-- navigation -->

			<!-- //navigation -->
		</div>
	</div>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-info">
						</div>
					</li>
					<li>
						<div class="slider-info1">
							
						</div>
					</li>
					<li>
						<div class="slider-info2">
							
						</div>
					</li>
				</ul>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Our Dream hotel</h4>
										<img src="./public/images/popup.jpg" alt=" " class="img-responsive"/>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->
			</div>
			<div class="clearfix"></div>
</div>		
		<!--//Slider-->

		<div class="main" id="main">
		<div class="w3layouts_main_grid">
		<div class="booking-form-head-agile">
		<h3>Hotel Booking form</h3>
		</div>
			<form action="./hotels/search" method="post" class="w3_form_post">

				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Destination </h5>
							<input type="text" name="destination" placeholder="Cancun" required="">
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="checkin" type="text" value="yyyy-mm-dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = new Date();}" required="" autocomplete="off">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker1" name="checkout" type="text" value="yyyy-mm-dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="" autocomplete="off">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of Guests *</h5>
						<select id="guests" name="guests[]" required="">
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
						</select>
					</div>
				</div>
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>

</div>
<!-- //header -->


<!-- js files -->
	<!-- For-Banner -->
		 <script src="./public/js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	<!-- //For-Banner -->
	</div>
</div>
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2021 Design by Tomás Balaguer</p>
</div>
<!--//footer-->
		<script src="./public/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- Calendar -->
			<link rel="stylesheet" href="./public/css/jquery-ui.css" />
			<script src="./public/js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="./public/js/move-top.js"></script>
				<script type="text/javascript" src="./public/js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="./public/js/SmoothScroll.min.js"></script>



</body>
</html>