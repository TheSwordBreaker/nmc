
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Nashik Tourism</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="keywords" content="Exert Design Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">
	<link rel="icon" type="image/png" href="<?= base_url('/assets/icons/plane.png') ?>">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href=" <?= base_url('assets/css/bootstrap.css') ?>" type="text/css" media="all">
	<link rel="stylesheet" href=" <?= base_url('assets/css/font-awesome.css') ?>" type="text/css" media="all">
	<link rel="stylesheet" href=" <?= base_url('assets/css/lightbox.css') ?>" type="text/css" media="all">
	<link href=" <?= base_url('assets/css/easy-responsive-tabs.css') ?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href=" <?= base_url('assets/css/style.css') ?>" type="text/css" media="all" />
</head>

<body>
	<div class="main" id="home">
		<!--navigation-->
		<div class="header-w3">
			<div class="header-top-agile">
				<div class="social-icons-agileits">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@example.com">nsktourism@gmail.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +918329007426</li>
					</ul>
				</div>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a></li>
						<li><a href="https://www.twitter.com/" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a></li>
						<li><a href="https://www.instagram.com/" class="link google-plus" target="_parent"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-bottom-agile">
				<div class=navigation>
					<nav class="navbar navbar-default cl-effect-16" id="cl-effect-16">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<div class="logo-agileinfo">
							<h1><a href="<?= base_url('MainC/')?>"><i class="fa fa-plane" aria-hidden="true"></i> Nashik Tourism</a></h1>
						</div>

						<div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?= base_url('MainC/')?>" data-hover="Home">Home</a></li>
								<li><a href="<?= base_url('MainC/AboutUs')?>" data-hover="About Us">About Us</a></li>
								<li><a href="<?= base_url('MainC/Dest')?>" data-hover="destination">Destination</a></li>
								<li><a href="<?= base_url('MainC/FoodStuff')?>" data-hover="culture">Food Stuff</a></li>
								<li><a href="<?= base_url('MainC/Cul')?>" data-hover="culture">Culture</a></li>
								<li><a href="<?= base_url('MainC/FoodStuff')?>" data-hover="FoodStuff">FoodStuff</a></li>
								<li><a href="<?= base_url('WorkC/')?>" data-hover="login">Login</a></li>
								<li><a href="#contact" data-hover="Contact Us" class="scroll">Contact Us</a></li>
								
							</ul>

						</div>
					</nav>
				</div>
				<div class="search">
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="<?= base_url('MainC/Search');?>" method="post">
							<input name="query" type="search" placeholder="Search..." required="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//navigation-->
		<!--banner-->
		<div class="banner">
			<div data-vide-bg="<?= base_url('assets/video/1.mp4')?>">
				<div class="center-container">
					<div class="banner-text">
						<div id="top" class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
									<div class="banner-text-info">
										<h3 class="bnr-title"></h3>
										<p> Welcome to the best city in our country</p>
									</div>
								</li>
								<li>
									<div class="banner-text-info">
										<h3 class="bnr-title"></h3>
										<p>Best place to travel</p>
									</div>
								</li>
								<li>
									<div class="banner-text-info">
										<h3 class="bnr-title"></h3>
										<p>It is known to be the city of Pilgrimage</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="we-po-head">
			</div>
		</div>
		<!--//banner-->
	</div>

	<!-- news --> <br><br> 
	 
	 <!-- news -->
	<div class="news" id="events">
		<div class="container">
			<h3 class="wthree_title_agile">PILGRIMAGES</h3>
			<div class="wthree-news-grids">
			<?php  for($i=0; $i < 3; $i++ ):?>

						<div class="col-md-4 agile-news-left">
							<img src="<?= base_url('assets/images/').$data[$i]->img ?>" alt="">
							<div class="agile-news-right">
								<div class="date-grid">
									<div class="time">
										<p><i class="fa fa-calendar" aria-hidden="true"></i> August 13,2019</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-agile-news-info">
									<a href="#" data-toggle="modal" data-target="#myModal1"><?= $data[$i]->name ?></a>
									<p><?= $data[$i]->des ?></p>
								</div>
								<div class="button">
									<a href="<?= base_url('MainC/all/destpage')?>">More</a>
								</div>
							</div>
						</div>

						<?php endfor ?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!--/counter-->
 <div class="agileinfo_counter_section" id="about"
 style="background: url(<?= base_url('assets/images/').$sec2[0]->img ?>) no-repeat 0px 0px, background-size: cover;">
		<div class="container">
			<h3><?= $sec2[0]->name ?></h3>
			<p class="sub_para two"><?= $sec2[0]->des ?> </p>
			<h5><a href="#contact" class="view rew3 scroll"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Contact Us</a></h5>
		</div>
	</div>
	<!--//counter-->
	<!-- gallery -->
		<div class="gallery1"><br><br>
		<div class="container">
			<div class="agile-heading">
				<h3 class="wthree_title_agile">Our Culture</h3>
			</div>
			<div class="agileinfo-gallery1">
			<div class="gallery1-grid-top">
				<div class="col-md-6 col-sm-6 w3-agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/PRIMG3.jpg')?>" data-lightbox="example-set" data-title="Dada Saheb Phalke Smarak in Nashik : Is situated right down of Pandav pandav leni.  
					This is a memorial of great visionary, Dadasaheb Phalke who was always committed towards edifying, devout and rational development.">
						<img src="<?= base_url('assets/images/PRIMG3.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a> 
				</div>
				<div class="col-md-6 col-sm-6 w3-agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/KumbhMela1.jpg')?>" data-lightbox="example-set" data-title="Kumbh Mela or Kumbha Mela : It is a major pilgrimage and festival in Hinduism. It is celebrated in a cycle of approximately 12 years at four river-bank the Prayag (Ganges-Yamuna-mythical Saraswati rivers confluence), Haridwar (Ganges), Nashik (Godavari), and Ujjain (Shipra).">
						<img src="<?= base_url('assets/images/KumbhMela1.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery1-grid-middle">
				<div class="col-md-3 w3-agileits-gallery1-grids agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/PRIMG5.jpg')?>" data-lightbox="example-set" data-title="Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that's how the mountain got its name.">
						<img src="<?= base_url('assets/images/PRIMG5.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery1-grids agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/PRIMG4.jpg')?>" data-lightbox="example-set" data-title="Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that's how the mountain got its name.">
						<img src="<?= base_url('assets/images/PRIMG4.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery1-grids agileits-gallery1-grids">
					<a  href="<?= base_url('assets/images/saputara.jpg')?>" data-lightbox="example-set" data-title="Saputara Hill Station – A perfect Hill Station for Monsoon : Saputra has situated around  80 km from Nashik City, is a beautiful and densely wooded hill station, ‘ Saputara’  situated in the “Dang” district of southern tip of Gujarat, India.">
						<img src="<?= base_url('assets/images/saputara.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery1-grids agileits-gallery1-grids gallery1-two">
					<a href="<?= base_url('assets/images/PRIMG1.jpg')?>" data-lightbox="example-set" data-title="Sula Vineyards – The Vineyards Story & Resort Around : Sula has rapidly established itself as India’s leading premium wine company. 
					Known for its white and red wine, Sula has been winning kudos in their field and showing growth since their commencement.">
						<img src="<?= base_url('assets/images/PRIMG1.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery1-grid-bottom">
				<div class="col-md-4 w3-agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/VANI1.jpg')?>" data-lightbox="example-set" data-title="Shree Saptshrungi Gad Vani : Shree Saptshrungi Gad is situated at a distance of 60 km from Nashik in Kalwan Tahsil.
					The temple is situated at 4659 feet above sea level, on a hill surrounded by seven peaks. It is considered to be Ardha Shaktipeeth out of Sadetin Shakti Peeths in Maharashtra. ">
						<img src="<?= base_url('assets/images/VANI1.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3-agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/trambak1.jpg')?>" data-lightbox="example-set" data-title="Trimbakeshwar Nashik :It is one of the holy places of not only Maharashtra but the whole India is near Nashik. Trimbakeshwar is one of the twelve Jyotirlingaas of Lord Shiva.">
						<img src="<?= base_url('assets/images/trambak1.jpg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-4 w3-agileits-gallery1-grids">
					<a href="<?= base_url('assets/images/RamRath.jpeg')?>" data-lightbox="example-set" data-title="Ramnavmi Rath Yatrac : Ramnavmi Ratha Yatra is held during the festival of Janmotsava at the Sansthan Shri Kalaram Mandir at Panchavati which is dedicated to Lord Rama. The festival is which lasts for 15days begin from the first day of Chaitra till Chaitra Purnima.">
						<img src="<?= base_url('assets/images/RamRath.jpeg')?>" class="img-responsive zoom-img" alt=" "/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
				

			</div>	
		</div>	
	</div>
<!-- //gallery -->
		<!-- /services -->

	<!-- contact -->
	<div class="contact" id="contact">
		<h3 class="wthree_title_agile"><span>C</span>ontact</h3>
		<div class="container">
			<div class="col-md-6 contact-agileits">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>
							<h6>Nashik</h6>
						</li>
					</ul>
					<div class="resp-tabs-container">

						<div class="tab2">
							<p class="para-agileits"><i class="fa fa-map-marker" aria-hidden="true"></i>
							Rajiv Gandhi Bhavan, Nashik, Maharashtra 422002</p> 
							<p class="para-agileits"><i class="fa fa-phone" aria-hidden="true"></i>02532575632</p>
							<p class="para-agileits"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:mail@example.com">nsktourism@gmail.com</a></p>
							<div class="agileits-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.168107240238!2d73.77363891441955!3d20.001458027428097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeba0b167d85f%3A0xa6c71d392bc4ccad!2sRajiv+Gandhi+Bhavan+Rd%2C+Pandit+Colony%2C+Nashik%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1565682969423!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 regstr-r-w3-agileits">
				<div class="form-bg">
					<h3 class="subhead-agileits white">GET IN TOUCH</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit" class="button hvr-rectangle-out">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->

	
	<!-- footer -->

<div class="footer">
		<div class="container">
			<div class="agile-logo">
				<a href="index.html">Nashik Tourism</a>
			</div>
			
			<div class="agile-copy">
				<!-- <hr class="rgba-white-light" style="margin: 0 15%;"> -->
				<p>© 2019 Nashik Tourism. All rights reserved | Design <!-- <i class="icon-heart-o" aria-hidden="true"> --></i> by GPN Students</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="thim-click-to-bottom">
			<a href="#home" class="scroll">
			<i class="fa fa-long-arrow-up" aria-hidden="true"></i>

		</a>
		</div>
	</div>
	<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="<?= base_url('assets/js/jquery-2.1.4.min.js ') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js ') ?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->
	<!--  light box js -->
	<script type="text/javascript" src="<?= base_url('assets/js/lightbox-plus-jquery.min.js ') ?>">
	</script>
	<!-- //light box js-->

	<!-- video-js -->
	<script src="<?= base_url('assets/js/jquery.vide.min.js ') ?>"></script>
	<!-- //video-js -->


	<!-- Baneer-js -->
	<!--responsive slider-->
	<script src="<?= base_url('assets/js/responsiveslides.min.js ') ?>"></script>
	<!--//responsive slider-->

	<!--banner Slider starts Here-->
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.places').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.places').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--//End-slider-script-->

	<!-- //Baneer-js -->
	<!-- search-jQuery -->
	<script src="<?= base_url('assets/js/main1.js ') ?>"></script>
	<!-- //search-jQuery -->

	<!-- required-js-files-->
	<link href="<?= base_url('assets/css/owl.carousel.css')?>" rel="stylesheet">
	<script src="<?= base_url('assets/js/owl.carousel.js ') ?>"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 4],
				itemsDesktopSmall: [414, 3],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!--//required-js-files-->

	<!-- script for responsive tabs -->
	<script src="<?= base_url('assets/js/easy-responsive-tabs.js ') ?>"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="<?= base_url('assets/js/move-top.js ') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/easing.js ') ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth scrolling -->
	<script src="<?= base_url('assets/js/SmoothScroll.min.js ') ?>"></script>
	<!-- //smooth scrolling -->

</body>
</html>
