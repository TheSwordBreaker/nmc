<div class="site-section">
  <h2 class="font-weight-light text-black text-center" style="font-family: verdana;">Our Attractions!!!</h2><br><br><br>
  <div class="container" style="font-family: verdana;">
    <div class="row align-items-stretch">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <a href="#" class="unit-1 text-center">
            <img src="<?= base_url('assets/images/') . $data[$i]->img ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
            </div>
          </a>
        </div>
      <?php endfor; ?>
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="unit-4 d-flex">
            <div><br>
              <h3><?= $data[$i]->name ?></h3>
              <p style="text-align: justify;"><?= $data[$i]->des ?></p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
    <div class="col text-center">
      <a href="<?= base_url('all/destination') ?>" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
    </div>
  </div>
</div>
<div class="page-header header-filter site-blocks-cover overlay inner-page-cover" style="background-image: url(<?= base_url('assets/images/') . $sec2[0]->img ?>); background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 responsive "><br>
        <h3 class="font-weight-light text-white " style="font-size: 25px; "><?= $sec2[0]->name ?> -</h3><br>
        <p class="font-weight-light text-white" style="text-align: justify; font-size: 18px; "><?= $sec2[0]->des ?> </p>
        <h5><a href="<?= base_url('MainC/AboutUs') ?>" class="view rew3"><i class="fa fa-hand-o-right" aria-hidden="true">&nbsp;</i>About Us</a></h5>
        <!-- <a href="<?= base_url('assets/video/1.mp4') ?>" class="play-single-big mb-4 d-inline-block popup-vimeo"><i class="material-icons" style="color: #ffff; font-size: 70px; ">play_circle_outline</i></a> -->
        <!-- <h2 class="text-white font-weight-light mb-5 h1">Experience Our Outstanding Services</h2> -->

      </div>
    </div>
  </div>
</div>
<div class="section">
  <div class="about  py-6" id="about">
    <div class="container" style="height:800px; font-family: verdana;"><br><br>
      <h2 class="text-black text-center" style="font-family: verdana;">Culture!!!</h2>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[0]->name1 ?>!!!</p>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[0]->name2 ?></p>
      <br>
      <div>
      <img src="<?= base_url('assets/images/homeCul.jpg') ?>" width="100%" class="responsive" alt="">
      </div>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[0]->name3 ?></p>
    </div>
  </div>
</div>
<div class="site-section" style="font-family: verdana;">
  <h2 class="font-weight-light text-black text-center">Food Stuff!!!</h2><br><br><br>
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec4[0]->img ?>" alt="Image" class="img-fluid">
          <div class="unit-1-text">
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div><br>
          <h3> <div class="text-uppercase"> <b><?= $sec4[1]->name ?></b></div></h3>
            <p><?= $sec4[1]->des ?></p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec4[2]->img ?>" alt="Image" class="img-fluid">

          <div class="unit-1-text">
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

        <div class="unit-4 d-flex">
          <div><br>
            <h3> <div class="text-uppercase"> <b><?= $sec4[0]->name ?></b></div></h3>
            <p><?= $sec4[0]->des ?> </p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec4[1]->img ?>" alt="Image" class="img-fluid">

          <div class="unit-1-text">
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div><br>
            <h3><div class="text-uppercase"><b><?= $sec4[2]->name ?></b></div></h3>
            <p><?= $sec4[2]->des ?></p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div><br>
    </div>
    <div class="col text-center">
      <a href="<?= base_url('all/destination') ?>" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
    </div>
  </div>
</div>
<br><br><br>