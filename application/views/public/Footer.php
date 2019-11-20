
	<!-- footer -->

<div class="footer">
		<div class="container align-center" style="display: flex; justify-content: center;">
			<div class="agile-logo">
				<a href="index.html">Nashik Tourism</a>
			</div>	
		</div>
		<!-- Button trigger modal -->
		<!-- <hr class="rgba-white-light" style="margin: 0 15%; display: flex; justify-content: center;"> -->
		<div class="container align-center" style="display: flex; justify-content: center;">
			<div class="agile-copy">
				<a href="index.html">WEBSITE POLICIES |</a>
				<a href="index.html">HELP |</a> 
				<div id="abc">
						<!-- Popup Div Starts Here -->
						<div id="popupContact">
						<!-- Contact Us Form -->
						<form action="#" id="form" method="post" name="form">
						<img id="close" src="<?= base_url('./assets/images/close.png')?>" onclick ="div_hide()">
						<h2>Contact Us</h2>
						 <!-- <hr> -->
						<input id="name" name="name" placeholder="Name" type="text" style="font-family: verdana;">
						<input id="email" name="email" placeholder="Email" type="text" style="font-family: verdana;">
						<textarea id="msg" name="message" placeholder="Message" style="font-family: verdana;"></textarea>
						<a href="javascript:%20check_empty()" id="submit" style="font-family: verdana;">Send</a>
						<br>
						</form>
						</div>
						<!-- Popup Div Ends Here -->
						</div>
						<a type="button" id="#popupContact" onclick="div_show()">CONTACT US |</a>
						
						<div id="abc1">
							<!-- Popup Div Starts Here -->
							<div id="popupFeedback">
							<!-- Contact Us Form -->
							<form action="#" method="post" name="form" style="max-width: 600; max-height: 250;">
							<img id="close" src="<?= base_url('./assets/images/close.png')?>" onclick ="div_hide1()">
							<h2>FEEDBACK FORM</h2>
							<h3 style="text-align: center;">We would love to hear your thoughts, concerns or problems with anything so we can improve!</h3>
							<!-- <hr> -->
							<input id="name" name="name" placeholder="Name" type="text" style="font-family: verdana;">
							<textarea id="msg" name="message" placeholder="Message" style="font-family: verdana;"></textarea>
							<a href="javascript:%20check_empty()" id="submit" style="font-family: verdana;">Send</a>
							<br>
							</form>
							</div>
							<!-- Popup Div Ends Here -->
							</div>
							<a type="button" id="#popupFeedback" onclick="div_show1()">FEEDBACK</a>
								
			</div>	 
		</div> 
		
		<div class="container align-center" style="display: flex; justify-content: center; padding: 1px;">
			<div class="agile-copy">
			<p>© 2019 Nashik Tourism. All rights reserved | Design <!-- <i class="icon-heart-o" aria-hidden="true"> --></i> by GPN Students</p>
			</div>
		</div>
</div>
		
		<!-- <div class="thim-click-to-bottom">
			<a href="#home" class="scroll">
			<i class="fa fa-long-arrow-up" aria-hidden="true"></i>

		</a>
		</div> -->
</div>

<script type="text/javascript" src="<?= base_url('assets/js/my_js.js ') ?>"></script>
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