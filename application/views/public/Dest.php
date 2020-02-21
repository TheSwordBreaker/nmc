<div class="site-section">
    <h2 class="font-weight-light text-black text-center">Our Attractions</h2><br><br><br>
    <div class="container">
        <div class="row align-items-stretch">

            <?php for ($i=0; $i < $no1 ; $i++): ?>
                <?php if($sec1[$i]->active==1) :?>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="unit-1 text-center">
                        <div class="">
                        <img src="<?= base_url('assets/images/') . $sec1[$i]->img ?>"  alt="Image" class="img-fluid "></div>
                        <div class="unit-1-text">
                        </div>
                    </a>
                </div>
            <?php endif?>
            <?php endfor; ?>


            <?php for ($i=0; $i < $no1 ; $i++): ?>
                <?php if($sec1[$i]->active==1) :?>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div><br>
                            <h3><?= $sec1[$i]->name ?></h3>
                            <p><?= $sec1[$i]->des ?></p>
                            <p><a href="<?= base_url('MainC/Dest/') . $sec1[$i]->name ?>">Learn More</a></p>
                        </div>
                    </div>
                </div>
            <?php endif?>
            <?php endfor; ?>
        </div>
        <div class="col text-center">
            <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
        </div>
        <!-- <div class="button">
            <div class="text-center">
           <a href="#" class="btn btn-primary" style="background-color: #f70255;">View All Events</a>
            </div>
        </div> -->
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black">Exploring Nashik!!!</h2>
                <p class="color-black-opacity-5">Choose Your Next Destination</p>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="#" class="unit-1 text-center">
                        <img src="<?= base_url('assets/images/') . $sec2[$i]->img ?>" alt="Image" class="img-fluid">
                        <div class="unit-1-text">

                            <h3 class="unit-1-heading"><?= $sec2[$i]->name ?></h3>
                        </div>
                    </a>
                </div>
            <?php endfor; ?>
        </div><br>
        <div class="col text-center">
            <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
        </div>
    </div>
</div>

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(<?= base_url('assets/images/') . $sec3[0]->img ?>); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                <a href="<?= base_url('assets/video/') . $sec3[0]->video ?>" class="play-single-big mb-4 d-inline-block popup-vimeo"><i class="material-icons" style="color: #ffff; font-size: 70px; ">play_circle_outline</i></a>
                <!-- <video><source src="/assets/video/2.mp4" type="video/mp4" class="play-single-big mb-4 d-inline-block popup-vimeo">
           </video>   -->
                <h2 class="text-white font-weight-light mb-5 h1" style="font-size: 5vw;"><?= $sec3[0]->des ?> </h2>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container text-justify">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black">Your Planning!!</h2>
                <p class="color-black-opacity-5">You can plan your trip like...</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <!--<div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>-->
                        <div>
                            <h3> <b><?= $sec4[$i]->name ?></b></h3>
                            <p style="font-size: 17px;"><?= $sec4[$i]->des ?></p>
                            </br>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 style="font-family: verdana;">Museums!!</h2>
                <h4>This websites is sponsored by NMC ( Nashik Municipal Corporation ) website which can also help you for your official work...!!! and this site also provides more information about Nashik city...!!!</h4>
            </div>
            <div class="section section-examples">
                <!-- <div class="container-fluid text-center"> -->
                <div class="row">
                    <?php for ($i = 0; $i < 6; $i++) : ?>
                        <div class="col-md-4 ml-auto mr-auto ">
                            <a href="#" target="_blank">
                                <!--Image simple-->
                                <img src="<?= base_url('assets/images/') . $sec5[$i]->img ?>" class="img-raised  img-fluid img-responsive">
                                <button class="btn  btn-link btn-primary btn-lg"><?= $sec5[$i]->name ?></button>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
        </div>
    </div>
</div>

<!--  carousel  -->
<div class="site-section">
    <div class="container text-justify">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black">Mountains!!</h2>
                <h4>This websites is sponsored by NMC ( Nashik Municipal Corporation ) website which can also help you for your official work...!!! and this site also provides more information about Nashik city...!!!</h4>
            </div>
        </div>
        <div class="section" id="carousel">
            <div class="container responsive">
                <div class="row">
                    <div class="col-md-12 mr-auto ml-auto">
                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 h-100" style="height:fit-content" src="<?= base_url('assets/images/') . $sec6[0]->img ?>" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                <i class="material-icons">location_on</i><?= $sec6[0]->name ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php for ($i = 1; $i < 5; $i++) : ?>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" style="height:fit-content" src="<?= base_url('assets/images/') . $sec6[$i]->img ?>" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h4>
                                                    <i class="material-icons">location_on</i><?= $sec6[$i]->name ?>

                                                </h4>
                                            </div>
                                        </div>
                                    <?php endfor ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--         end carousel -->
<div class="section">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto ">
                <h2 style="font-family: verdana;">Waterfalls!!</h2>
                <h4>This websites is sponsored by NMC ( Nashik Municipal Corporation ) website which can also help you for your official work...!!! and this site also provides more information about Nashik city...!!!</h4>
            </div>
            <div class="section sextion-examples container">
                <div class="team pt-3">
                    <div class="row">
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="team-player">
                                    <div class="card card-plain px-3">

                                        <img src="<?= base_url('assets/images/') . $sec7[$i]->img ?>" alt="img-responsive" class="img-resized img-responsive">
                                        <h4 class="card-title" style="font-family: verdana; font-size: 15px;"><?= $sec7[$i]->name ?>
                                            <br>
                                            <!-- <small class="card-description text-muted">Model</small> -->
                                        </h4>
                                        <div class="card-body">
                                            <p class="card-description text-justify"><?= $sec7[$i]->des ?></p>
                                            <p style="text-align: left;"><a href="#">Learn More</a></p>
                                            <!-- <p><a href="#" class="btn btn-info mb-auto">Learn More</a></p> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
        </div>
    </div>
</div>