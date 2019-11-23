<div class="section text-center">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Foods !!!</h2>
            <h5 class="description">Nashik has a personality of its own, due to its mythological, historical, social and
                cultural importance. The city is situated on the banks of the Godavari River, making it one of the
                holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it
                that Lord Rama.</h5>
        </div>
    </div>


    <hr>


    <div class="col-md-12 bg-light w-100">
        <div class="px-auto ">
            <div class="row padding">
                <?php  for($i=0; $i < 3; $i++ ):?>
                <div class="col-md-4 ">
                    <div class="card bg-dark text-white">
                        <div class="text-center">
                            <img class="card-img img-fluid img-responsive w-100 "  style="height:25rem;"
                                src="<?= base_url('/assets/images/').$sec1[$i]->img ?>" alt="Card image">
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h1 class="card-title display-3 "><span class="border-secondary"><?= $sec1[$i]->name ?></span></h1>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

    <hr class="w-75 ">


    <div class="features">
        <div class="row">
            <div class="m-auto">
                <h2 class="title">Nashik's Trendiest Food </h2>
            </div>
            <div class="container-fluid mx-auto">
                <div class="row padding">

                    <?php  for($i=0; $i < 2; $i++ ):?>
                    <div class="col-md-6">
                        <div class="card" style="height:35rem">
                            <img class="card-img-top " src="<?= base_url('/assets/images/').$sec2[$i]->img;  ?>"
                                style="height:100%" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-header card-header-success">
                                    <h3 class="card-title"><?= $sec2[$i]->name ?></h3>
                                    <!-- <p class="category">Category subtitle</p> -->
                                </div>
                                <h4 class="card-title">Here is the Icon</h4>
                                <?= $sec2[$i]->des ?>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <?php endfor ?>

                </div>
            </div>
        </div>
    </div>






    <!--  carousel  -->
    <div class="section" id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mr-auto ml-auto">
                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            data-interval="3000">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php  for($i=0; $i < 3; $i++ ):?>
                                <div class="carousel-item <?php  if($i==0){echo "active";}?>">
                                    <img class="d-block w-100 h-100" style="height:fit-content"
                                        src="<?= base_url('assets/images/').$sec3[$i]->img ?>" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <i class="material-icons">location_on</i> <?= $sec3[$i]->des ?>
                                        </h4>
                                    </div>
                                </div>
                                <?php endfor ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <i class="material-icons">keyboard_arrow_left</i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
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
    <!--         end carousel -->




    <div class="section text-center">
        <h2 class="title">Great Misal Points</h2>
        <div class="team pt-3">
            <div class="row">

            <?php  for($i=0; $i < 3; $i++ ):?>
            

                <div class="col-md-4">
                    <div class="team-player">


                        <div class="card card-plain px-3">
                            <img src="<?= base_url('assets/images/').$sec4[$i]->img ?>" alt="Thumbnail Image"
                                class="img-resized">
                            <h4 class="card-title"><?= $sec3[$i]->name ?>
                               
                               
                            </h4>
                            <div class="card-body">
                                <p class="card-description text-justify"><?= $sec4[$i]->des ?></p>
                                <p><a href="#" class="btn btn-info m-auto">Learn More</a></p>
                            </div>

                        </div>
                    </div>
                </div>



                <?php endfor ?>
                
            </div>
        </div>
    </div>