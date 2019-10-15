
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