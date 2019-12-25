<section class="section single-blog-page text-left pt-5 mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

				<div class="blog-content">
					<h2 class="display-3 pb-3 info-title"><?= $data[0]->name ?></h2>
					<div class="blog-thumb set-bg " style="background-image: url(<?= base_url('assets/images/') . $data[0]->img ?>">


					</div>
					<p> <?= $data[0]->des ?> </p>
				</div>


			</div>

			<!-- sidebar -->
			<div class="col-lg-4 col-md-7 sidebar pt-3 ml-auto mr-auto pt-lg-0">


				<!-- widget -->
				<div class="widget-item">
					<h4 class="widget-title display-5">Latest Posts</h4>
					<div class="latest-blog">
						<!-- <?php $count = 1   ?>
						<?php for ($i = 1; $data[$i]->active == 1; $i++) : ?>
							<?php $count++   ?>
							<?php if ($count == 4) {
																							break;
																						} ?> 
							<div class="lb-item">
								<div class="lb-thumb set-bg" style="background-image: url(<?= base_url('images/latest-blog/1.jpg') ?>"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						<?php endfor ?> -->
						<div class="lb-item">
							<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
							<div class="lb-content">
								<div class="lb-date">June 21, 2018</div>
								<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
								<a href="#" class="lb-author">By Admin</a>
							</div>
						</div>
						<div class="lb-item">
							<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
							<div class="lb-content">
								<div class="lb-date">June 21, 2018</div>
								<p>Ipsum dolor sit amet, consectetur adipisc ing consecips</p>
								<a href="#" class="lb-author">By Admin</a>
							</div>
						</div>
					</div>
				</div>




			</div>
		</div>
	</div>
</section>