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
						<li><a href="<?= base_url('MainC/?lang=en')?>"><?php echo $lang['lang_en'] ?></a></li>
						<li><a href="<?= base_url('MainC/?lang=bs')?>"><?php echo $lang['lang_bs'] ?></a></li>
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
							<h1><a href="<?= base_url('MainC/')?>"><i class="fa fa-plane" aria-hidden="true"></i><?php echo $lang['title'] ?></a></h1>
						</div>

						<div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?= base_url('MainC/')?>" data-hover="Home"><?php echo $lang['home'] ?></a></li>
								<li><a href="<?= base_url('MainC/AboutUs')?>" data-hover="About Us"><?php echo $lang['about us'] ?></a></li>
								<li><a href="<?= base_url('MainC/Dest')?>" data-hover="destination"><?php echo $lang['destination'] ?></a></li>
								<li><a href="<?= base_url('MainC/FoodStuff')?>" data-hover="Food Stuff"><?php echo $lang['food stuff'] ?></a></li>
								<li><a href="<?= base_url('MainC/Culture')?>" data-hover="Culture"><?php echo $lang['culture'] ?></a></li>

								<!-- <li><a href="" data-hover="Culture" class="scroll">Culture</a></li> -->
								<li><a href="<?= base_url('WorkC/')?>" data-hover="login"><?php echo $lang['login'] ?></a></li>
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
						<form action="<?= base_url('MainC/Search')?>" method="post">
							<input name="Search" type="search" placeholder="Search..." required="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//navigation-->