<div class="section text-center">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Our Nashik !!!</h2>
            <h4 class="description">A city where one gets intoxicated by spirituality and wine, where one is mesmerized by the green pastures and the mountains and where history meets mythology, is Nashik! </h4>
        </div>
    </div>


    <hr>


    <div class="about bg-light py-6" id="about">
		<div class="container" style="height:800px;">
				<h2 class="title"><?=$sec1[0]->name?></h2>
					<p class="iner mt-4" style="font-size: 15px;" ><?= $sec1[0]->des1 ?></p>
					<p class="iner mt-4" style="font-size: 15px;"><?= $sec1[0]->des2 ?></p>
					<br>
                <img src="<?= base_url('assets/images/culsec1/').$sec1[0]->img ?>" class="center" style="margin-right: 20px; margin-left: 20px;" alt="">
				<p class="iner mt-4"><?= $sec1[0]->des3 ?> </p>
			</div>
		</div>

<!-- <div class="site-section"> -->
      <div class="container" style="height: 800px;">
        <div class="row justify-content-center mb-3">
          <div class="col-md-3 text-center">
            <h2 class="title">Our Events</h2>
            <h4 class="color-black-opacity-5">The Events of Nashik City</h4>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">

        <?php for( $i=0; $i < 2; $i++ ): ?>

          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?= base_url('assets/images/culsec2/').$sec2[$i]->img ?>" alt="Image" class="img-fluid">
              <br>
              <h3 class="card-title"><?= $sec2[$i]->name ?></h3>
             
              <p><?= $sec2[$i]->des?></p>
            </div> 
          </div>

          <?php endfor?>
                
        </div>
        <div class="button">
          <!-- <div class="text-center"> -->
        <a href="#" class="btn btn-outline-primary border-2 py-3 px-5" >View All Events</a>
          <!-- </div> -->
          
        </div>
      </div>
    <!-- </div> -->

<br>



  
<section class="welcome py-5">
	<div class="container py-3" style="height:800px">
  <h2 class="title">Our Speciality</h2> 

  <h4 class="color-black-opacity-5">Exploring the city of diversity....</h4>
<!--  carousel  -->
  <div class="col-md-14 mr-auto ml-auto" style="height: 800px; weidth: 1500px">
                <!-- Carousel Card -->
                <div class="card card-raised card-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                        data-interval="3000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                    <div class="carousel-item active"><br><br><br>
                        <div class="row welcome-grids">
			                    <div class="col-lg-6">
				                    <h2 class="mb-3"><?= $sec3[0]->name?></h2>
				                    <h3><?= $sec3[0]->des1?></h3> 
				                    <p class="my-4"  style="font-size: 20px;margin-left: 18px;" ><?= $sec3[0]->des?></p>
				                    <a href="#">Read More</a>
			                    </div>
			                    <div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3" >
				                    <div class="position" style="margin-right:15px;">
					                  <img src="<?= base_url('assets/images/culsec3/').$sec3[0]->img?>" alt="" class="img-fluid" />
				                    </div>
			                    </div>
                        </div>                               
                    </div>

                    <?php  for($i=1; $i < 6; $i++ ):?>

                    <div class="carousel-item"><br><br><br>
                            <div class="row welcome-grids">
			                    <div class="col-lg-6">
				                    <h2 class="mb-3"><?= $sec3[$i]->name?></h2>
				                    <h3><?= $sec3[$i]->des1 ?></h3>
				                    <p class="my-4" style="font-size: 20px;margin-left: 18px; text-align:justify;"><?= $sec3[$i]->des?></p>
				                    <a href="#">Read More</a>
			                    </div>
			                    <div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3">
				                    <div class="position" style="margin-right:15px;">
					                  <img src="<?= base_url('assets/images/culsec3/').$sec3[$i]->img?>" alt="" class="img-fluid" />
				                    </div>
			                    </div>
                        </div>        
                            </div>
                            <?php endfor ?>
                            

                            

</div>
</section>
<!--         end carousel -->

