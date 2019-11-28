<div class="site-section">
    <h2 class="font-weight-light text-black text-center">Our Attractions</h2><br><br><br>
    <div class="container">
        <div class="row align-items-stretch">

            <?php for ($i=0; $i < 3 ; $i++): ?>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/').$data[$i]->img ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                    </div>
                </a>
            </div>

            <?php endfor; ?>

            <?php for ($i=0; $i < 3 ; $i++): ?>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div><br>
                        <h3><?= $data[$i]->name ?></h3>
                        <p><?= $data[$i]->des ?></p>
                        <p><a href="<?= base_url('MainC/Places/').$data[$i]->name ?>">Learn More</a></p>
                    </div>
                </div>
            </div>

            <?php endfor; ?>
        </div>
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
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/PRIMG3.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">

                        <h3>Phalake Smarak</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/1.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block"></strong>
                        <h3 class="unit-1-heading">Panchwati</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/trambak1.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block"></strong>
                        <h3 class="unit-1-heading">Trambkeshwar</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/pandavlene.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block"></strong>
                        <h3 class="unit-1-heading">Panduv Leni</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/kalaram.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block"></strong>
                        <h3 class="unit-1-heading">Kala-Ram Mandir</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="#" class="unit-1 text-center">
                    <img src="<?= base_url('assets/images/PRIMG5.jpg') ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <strong class="text-primary mb-2 d-block"></strong>
                        <h3 class="unit-1-heading">Anjeneri</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="site-blocks-cover overlay inner-page-cover"
    style="background-image: url(<?= base_url('assets/images/2.jpg') ?>); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                <a href="<?= base_url('assets/video/1.mp4')?>"
                    class="play-single-big mb-4 d-inline-block popup-vimeo"><i class="material-icons"
                        style="color: #ffff; font-size: 70px; ">play_circle_outline</i></a>
                <!-- <video><source src="/assets/video/2.mp4" type="video/mp4" class="play-single-big mb-4 d-inline-block popup-vimeo">
           </video>   -->
                <h2 class="text-white font-weight-light mb-5 h1">Experience Our Outstanding Services</h2>

            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black">Your Planning!!</h2>
                <p class="color-black-opacity-5">You can plan your trip like...</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!--<div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>-->
                    <div>
                        <h3> <b>Day 1</b></h3>
                        <p style="font-size: 17px;">Reach Nasik, preferably by noon, and take some rest. In
                            the evening, you can take a stroll in the main markets, which are
                            famous for their beaded jewellery and other handicrafts.</p>
                        </br>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!--div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>-->
                    <div>
                        <h3><b>Day 2</b></h3>
                        <p style="font-size: 17px;">The next day should be earmarked for a visit to the
                            glorious
                            Triambakeshwar temple for both spiritualism & adventure. There on,
                            you can proceed to Anjaneri Hills, which is the birthplace of Lord
                            Hanuman.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!-- <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>-->
                    <div>
                        <h3><b>Day 3</b></h3>
                        <p style="font-size: 17px;">The third day can start with blessings from the holy
                            site of
                            Panchvati.Then you can go for Sri Kalaram Temple is situated in the Panchavati
                            area, after this you can also visit to Tapovan and Seeta gumha which are just
                            near to this.
                        </p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!-- <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>-->
                    <div>
                        <h3><b>Day 4</b></h3>
                        <p style="font-size: 17px;">Now you can visit to Pandavleni Caves which are the
                            ancient rock cut caves situated to the south of Nashik.Then you can move to Sri
                            Dharmachakra Prabhav Tirth, a beautiful Jain Temple situated near Viholi village
                            on Nashik - Mumbai Road. You can also include Butterfly garden in this places.
                        </p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!-- <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sailboat"></span></div>-->
                    <div>
                        <h3><b>Day 5</b></h3>
                        <p style="font-size: 17px;">The fifth day can be start with Dhudsagar falls offer a
                            panoramic view with a spectacular scenery, which may also include Balaji temple
                            in this visit. There is another best place to visit that is Navsha Ganpati
                            Temple of Lord Ganesha. These places are closer from one another. </p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <!-- <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ski"></span></div>-->
                    <div>
                        <h3><b>Day 6</b></h3>
                        <p style="font-size: 17px;">Then the next day you can go to Saptashrungi Gad, a hill
                            range situated 60 km from Nashik and forms a part of the Sahyadri range.Then you
                            can go for Saputara, snuggled in the Sahyadris or the Western Ghats, a quaint
                            little hill station near to Nashik.</p>
                        </br>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="section">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2>Visit Our Sponsors Websites!!!</h2>
                <h4>This websites is sponsored by NMC ( Nashik Municipal Corporation ) website which can
                    also help you for your official work...!!! and this site also provides more information
                    about Nashik city...!!!</h4>
            </div>
        </div>
    </div>
</div>
<div class="section section-examples">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-6">
                <a href="https://nashikcorporation.in/" target="_blank">
                    <img src="<?= base_url('./assets/images/NMC.png')?>" alt="Rounded Image"
                        class="img-raised rounded img-fluid">
                    <button class="btn  btn-link btn-primary btn-lg">View NMC</button>
                </a>
            </div>
            <div class="col-md-6">
                <a href="https://nashikcorporation.in/article/index/id/1#tabs|History:tab1" target="_blank">
                    <img src="<?= base_url('./assets/images/NMC_about.png')?>" alt="Rounded Image"
                        class="img-raised rounded img-fluid">
                    <button class="btn btn-link btn-primary btn-lg">View About Page</button>
                </a>
            </div>
        </div>
    </div>
</div>