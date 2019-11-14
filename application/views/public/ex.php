<!-- <?php foreach($data as $d):?>
<?php for ($i=0; $i < 3;  $i++): ?>

<?= $d->name ?>

<?php endfor ?> 
<?php endforeach ?>  -->



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
							<a href="Destination.html">More</a>
						</div>
					</div>
				</div>

				<?php endfor ?>