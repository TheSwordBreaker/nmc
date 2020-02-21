<div class="section text-center">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <h2 class="font-weight-light text-black text-center">Foods!!!</h2>
            <h5 class="description">Nashik has a personality of its own, due to its mythological, historical, social and
                cultural importance. The city is situated on the banks of the Godavari River, making it one of the
                holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it
                that Lord Rama.</h5>
        </div>
    </div>


    <hr>



    <!-- Food Stuff Section 1 -->
    <div class="container">
    <div class=" bg-white ">
        <div class="col-md-12 bg-light w-100 ">
            <div class="m-auto ">
                <div class="row padding">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="col-md-4 ">
                            <div class="card " style="height:37rem">
                                <div class="text-center">
                                    <img src="<?= base_url('/assets/images/') . $sec1[$i]->img;  ?>" id="FoodSec1" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title display-4 title text-dark"><?= $sec1[$i]->name ?></h5>

                                        <p class="card-text"><small class="text-muted">Know More</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- End  Food Stuff Section 1 -->



    <hr class="w-75 ">

    <!--  Food Stuff Section 3 -->
    <!--  carousel  -->
    <div class="section mt-3" id="carousel">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 mr-auto ml-auto">
                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php for ($i = 0; $i < 3; $i++) : ?>
                                    <div class="carousel-item <?php if ($i == 0) {
                                                                    echo "active";
                                                                } ?>">
                                        <img class="d-block w-100 h-100" style="height:fit-content" src="<?= base_url('assets/images/') . $sec3[$i]->img ?>" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                <i class="material-icons">location_on</i> <?= $sec3[$i]->des ?>
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
    <!--         end carousel -->

    <!-- End  Food Stuff Section 3 -->

    <!-- Food Stuff Section 2 -->
    <div class="container">
    <div class="features my-2">
        <div class="row">
            <div class="m-auto">
                <h2 class="font-weight-light text-black text-center title">Nashik's Trendiest Food!!! </h2>
            </div>
            <div class="container-fluid mx-auto">
                <div class="row padding">

                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col-md-6">
                            <div class="card" style="height:35rem">
                                <img class="card-img-top " style="height:20rem" src="<?= base_url('/assets/images/') . $sec2[$i]->img;  ?>" style="height:100%" alt="Card image cap">
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

    <!-- End  Food Stuff Section 2 -->

    <br>
    <hr class="w-75 ">
    </div>






    <!-- Food Stuff Section 4 -->
    <div class="container">
    <div class=" text-center m-0 ">
        <h2 class="title">Great Misal Points</h2>
        <div class="team ">
            <div class="row">

                <?php for ($i = 0; $i < 3; $i++) : ?>


                    <div class="col-md-4">
                        <div class="team-player">


                            <div class="card card-plain px-3" style="background= #6b5250;">
                                <img src="<?= base_url('assets/images/') . $sec4[$i]->img ?>" alt="Thumbnail Image" class=" card-img img-circle img-resized ">
                                <h4 class="card-title"><?= $sec3[$i]->name ?>


                                </h4>
                                <div class="card-body">
                                    <p class="card-description text-justify "><?= $sec4[$i]->des ?></p>
                                    <p><a href="#" class="btn btn-info m-auto">Learn More</a></p>
                                </div>

                            </div>
                        </div>
                    </div>



                <?php endfor ?>

            </div>
        </div>
    </div>
    </div>


</div>