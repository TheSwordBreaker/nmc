
<?php include('Header.php') ?>
<body>
	<div class="main" id="home">
		<!--navigation-->
		<?php include('Navbar.php'); ?>
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
							<img src="<?= base_url('assets/images/homepage/').$data[$i]->img ?>" alt="">
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
								</div><br>
								<div class="w3l-button" style="text-align: justify;"
										<a href="<?= base_url('MainC/Dest')?>" data-toggle="modal" data-target="#myModal3">More</a>
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
	<div class="page-header header-filter " data-parallax="true">
 <div class="agileinfo_counter_section" id="about" >
 <!-- style="background: url(<?= base_url('assets/images/').$sec2[0]->pic ?>)" -->
		<div class="container">
			<h3> <?= $sec2[0]->name ?></h3>
			<p class="sub_para two" style="text-align: justify;"><?= $sec2[0]->des ?> </p>
			<h5><a href="<?= base_url('MainC/AboutUs')?>" class="view rew3"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>About Us</a></h5>
		</div>
	</div>
</div>
	<br>
	<br>
	<!--//counter-->
	<!-- gallery -->
		<!-- <div class="gallery1"><br><br>
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
	</div> -->
<!-- //gallery -->
		<!-- /services -->

	<!-- contact -->
	<!-- <div class="contact" id="contact">
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
	//contact -->
	<!-- <div>
	<section class="main-content" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			<li>
				<div id="bg">
					<div class="banner-info-wthree">
						<div class="container">
							<h6>PHOTOGRAPHY</h6>

							<h3>Model Photography</h3>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div id="bg1">
					<div class="banner-info-wthree">
						<div class="container">
							 <h6>PHOTOGRAPHY</h6>
							<h3> Art of the Camera</h3> 
						</div>
					</div>
				</div>
			</li>
			<li>
				<div id="bg2">
					<div class="banner-info-wthree">
						<div class="container">
							<h6>PHOTOGRAPHY</h6>
							<h3>Model Photography</h3>

						</div>
					</div>
				</div>
			</li>
			<li>
				<div id="bg3">
					<div class="banner-info-wthree">
						<div class="container">
							<h6>PHOTOGRAPHY</h6>
							<h3> Art of the Camera</h3>
						</div>
					</div>
				</div>
			</li>

		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
		<div class="navigation">
			<div>
				<label for="slides_1"></label>
				<label for="slides_2"></label>
				<label for="slides_3"></label>
				<label for="slides_4"></label>
			</div>
		</div>
	</div>
</section>
</div>
<br>
	<br> -->
	<!-- //banner -->
	<!-- footer -->
	<!-- about -->
			<!-- <hr class="rgba-white-light" style="margin: 0 15%; display: flex; justify-content: center; color:red;"> -->
<div class="about bg-light py-5" id="about">
		<div class="container">
				<h3 class="wthree_title_agile">CULTURE</h3>
					<p class="iner mt-4" style="font-size: 15px;" >Nashik has a personality of its own, due to its mythological, historical, social and cultural importance. The city is situated on the banks of the Godavari River, making it one of the holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it that Lord Rama, </p>
					<p class="iner mt-4" style="font-size: 15px;">the King of Ayodhya, made Nashik his adobe during his 14 years in exile.At the same place Lord Laxman, by the wish of Lord Rama, cut the nose of “Shurpnakha” and thus this city was named as “Nashik”.In Kritayuga, Nashik was ‘Trikantak’,</p>
					<br>
				<img src="<?= base_url('./assets/images/homeCul.jpg')?>" class="center" style="margin-right: 80px; font-size: 15px;" alt="">
				<p class="iner mt-4">‘Janasthana’ in Dwaparyuga and later in Kuliyuga it became ‘Navashikh’ or ‘Nashik’. Renowed poets like Valmiki, Kalidas and Bhavabhooti have paid rich tributes here. Nashik in 150 BC.was beleived to be the country’s largets market place. From 1487 A.D, this province came under the rule of Mughals and was known as ‘Gulchanabad’. It was also home of emperor Akbar and he has written at lenght about Nashik in ‘Ein-e-Akbari’.</p>
			</div>
		</div>
<br><br>
<!-- //about -->
	<!-- news -->
	<div class="news" id="events">
			<div class="container">
				<h3 class="wthree_title_agile"><span></span>FOOD-STUFF</h3>
				<br>
				<div class="wthree-news-grids">
					<div class="col-md-4 agile-news-left">
						<img src="<?= base_url('./assets/images/j6.jpg')?>" alt="">
						<div class="agile-news-right">
							<div class="date-grid">
								<div class="time">
									<!-- <p><i class="fa fa-calendar" aria-hidden="true"></i> June 12,2017</p> -->
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3-agile-news-info">
								<a href="#" data-toggle="modal" data-target="#myModal1">KOKNI DARBAR</a>
								<p style="text-align: justify; font-size: 15px;">This is the best place in nashik for non vegetarian. Taste of food here is mind blowing. U will not experience such a good taste anywhere in nashik for non veg. The most famous dish over here is chicken sizzlers.</p>
							</div><br>
							<div class="w3l-button">
								<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 agile-news-left">
						<div class="agile-news-right w3l-newsw">
							
							<div class="w3-agile-news-info">
								<a href="#" data-toggle="modal" data-target="#myModal2">Sadhana Misal</a>
								<p style="text-align: justify; font-size: 15px;">One who enjoys misal is just gonna fall in love with Sadhana Misal in Nashik which is situated very close to Someshwar. Sadhana is just two and a half years old restaurant and has become so very famous in such a short while </p>
							</div><br>
							<div class="w3l-button">
								<a href="#" data-toggle="modal" data-target="#myModal2">More</a>
							</div>
							<br>
						</div>
						<img src="<?= base_url('./assets/images/sadhna_misal.jpg')?>" alt="">
					</div>
					<div class="col-md-4 agile-news-left">
						<img src="<?= base_url('./assets/images/gulabjamun.jpg')?>" alt="">
						<div class="agile-news-right">
							<div class="date-grid">
								<div class="time">
									<!-- <p><i class="fa fa-calendar" aria-hidden="true"></i> July 14,2017</p> -->
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3-agile-news-info">
								<a href="#" data-toggle="modal" data-target="#myModal3">bhudha halwai</a>
								<p style="text-align: justify; font-size: 15px;">This is well known mithai shop in Nashik. An iconic place in Nasik since decades.
									Famous for its Jaleebi, but rest of the items are also very tasty.
									One of the must visits in nashik, this is situated in the heart of the city in panchavati.</p>
							</div><br>
							<div class="w3l-button">
								<a href="#" data-toggle="modal" data-target="#myModal3">More</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- Modal1 -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="wthree_title_agile" style="font-size: 20px;">Kokni darbar</h3>
						<img src="<?= base_url('./assets/images/j6.jpg')?>" alt="blog-image" />
						<span>
							Second most famous dish - Chicken Kolhapuri.<br>
							Rating - Taste : 5/5<br>
							Service : 3.5/5 ( very crowded so slow service)<br>
							Value for money : 4/5 ( little expensive) 
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal1 -->
		<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="wthree_title_agile" style="font-size: 20px;">sadhana misal</h3>
						<img src="<?= base_url('./assets/images/sadhna_misal.jpg')?>" alt="blog-image" />
						<span>
							Rating - 
							Taste: 5/5<br>
							Service: 4.5/5<br>
							Food options: 5/5<br>
							Pricing: 5/5<br>
							Location: 5/5
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal2 -->
		<!-- Modal3 -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="wthree_title_agile" style="font-size: 20px;">bhudha halwai</h3>
						<img src="<?= base_url('./assets/images/gulabjamun.jpg')?>" alt="blog-image" />
						<span>Rating - 
								Taste: 5/5<br>
								Service: 3/5<br>
								Food options: 5/5<br>
								Pricing: 4/5<br>
								Location: 5/5</span>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal3 -->
		<!-- news -->
	<?php include('Footer.php'); ?>
