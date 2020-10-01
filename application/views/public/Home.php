<!-- Home page -->

<!-- POPUP -->
<?php if($con[0]->status!=1):?>
<div id="myModal1" class="modal fade" style="font-family: 'Raleway', sans-serif; text-align: justify;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php for ($i=0; $i < count($sec5) ; $i++): ?>
        <?php if($sec5[$i]->active==1) :?>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title center" id="modal-title"><?=$sec5[$i]->name?></h3>
      </div>
      <div class="modal-body">
        <img class="center" style="display: block; width: 80%;" src="<?= base_url('/assets/images/').$sec5[$i]->img ?>"
          alt=""><br>
        <p>
          <?= $sec5[$i]->des?>
        </p>
      </div>
    </div>
    <?php endif;?>
    <?php endfor; ?>

  </div>
</div>
<?php endif;?>
<!-- //POPUP -->
<br>
<h2 class="font-weight-light text-black text-center" style="font-family: verdana;">News and Updates!!!</h2><br>
<div class="header-bottom">
  <div class="container clearfix">
    <div class="btn btn-danger btn-raised btn-lg ttl d-none d-sm-block d-md-block">
      <i class="fa fa-bullhorn"></i> &nbsp;ANNOUNCEMENT</div>
    <div class="btn btn-danger btn-raised btn-lg ttl d-block d-sm-none">
      <i class="fa fa-bullhorn"></i></div>
    <div class="marquee_horizon">
      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <div class="">
          <?php for ($i=0; $i < count($sec6) ; $i++): ?>
          <?php if($sec6[$i]->active==1) :?>
          <span><img width="35" height="20" src="<?= base_url('assets/images/new.gif')?>"><a
              href="<?= $sec6[$i]->link?>" target="_blank"><?= $sec6[$i]->name?></a> </span>
          <?php endif;?>
          <?php endfor; ?>
        </div>
      </marquee>
    </div>
  </div>
</div>
<div class="site-section">
  <h2 class="font-weight-light text-black text-center" style="font-family: verdana;">Our Attractions!!!</h2><br>
  <br><br>
  <div class="container" style="font-family: verdana;">
    <div class="row align-items-stretch">
      <?php for ($i=0; $i < count($sec1) ; $i++): ?>
      <?php if($sec1[$i]->active==1) :?>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="<?= base_url('MainC/Places/'.$sec1[$i]->name) ?>" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec1[$i]->img ?>" alt="Image" class="img-fluid">
          <div class="unit-1-text">
          </div>
        </a>
      </div>
      <?php endif;?>
      <?php endfor; ?>


      <?php for ($i=0; $i < count($sec1) ; $i++): ?>
      <?php if($sec1[$i]->active==1) :?>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div><br>
            <h3><?= $sec1[$i]->name ?></h3>
            <p style="text-align: justify;"><?= $sec1[$i]->des ?></p>
            <p><a href="<?= base_url('MainC/Places/'.$sec1[$i]->name) ?>" class="btn m-auto">Learn More</a></p>
            <!-- <p><a href="<?= base_url('MainC/Places/'.$sec1[$i]->name) ?>">Learn More</a></p> -->
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endfor; ?>
    </div>

    <div class="col text-center"><br>
      <a href="<?= base_url('MainC/All/destination') ?>" style="color: black;"
        class="btn btn-outline-default btn-round btn-white btn-lg">View All Events</a>
    </div>
  </div>
</div>
<?php for ($i=0; $i < count($sec2) ; $i++): ?>
<?php if($sec2[$i]->active==1) :?>                  
<div class="site-section">
  <div class="site-blocks-cover overlay inner-page-cover"
    style="background-image: url(<?= base_url('assets/images/') . $sec2[$i]->img ?>); background-attachment: fixed;">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
          <a target="_blank" href="https://www.youtube.com/embed/46LJLbaTbJ0?start=0&autoplay=1">
            <i class="fa fa-play-circle"
              style="color: #ffff; font-size: 70px; "></i></a>
          <h2 class="text-white font-weight-light mb-5 h1" style="font-size: 5vw;"><i class="fa fa-quote-left"
              aria-hidden="true"></i> <?= $sec2[$i]->des ?> <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
        </div>
      </div>
    </div>
  </div>
  <?php endif;?>
  <?php endfor; ?>

  <br><br>
  <?php for ($i=0; $i < count($sec3) ; $i++): ?>
  <?php if($sec3[$i]->active==1) :?>
  <div class="about  py-6" id="about">
    <div class="container" style="height:800px; font-family: verdana;">
      <h2 class="text-black text-center" style="font-family: verdana;">Culture!!!</h2>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[$i]->des1 ?>!!!</p>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[$i]->des2 ?></p>
      <br>
      <div>
        <img src="<?= base_url('assets/images/') . $sec3[$i]->img ?>" width="100%" class="responsive" alt="">
      </div>
      <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[$i]->des3 ?></p>
    </div>
  </div>
</div>
<?php endif; ?>
<?php endfor; ?>


<div class="site-section" style="font-family: verdana;"><br><br><br>
  <h2 class="font-weight-light text-black text-center">Food Stuff!!!</h2><br><br>
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="<?= base_url('MainC/Places/'.$sec4[0]->name) ?>" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec4[0]->img ?>" alt="Image" class="img-fluid">
          <div class="unit-1-text">
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div>
            <h3>
              <div class="text-uppercase"> <b><?= $sec4[1]->name ?></b></div>
            </h3>
            <p><?= $sec4[1]->des ?></p>
            <p><a href="<?= base_url('MainC/Places/'.$sec4[1]->name) ?>" class="btn m-auto">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="<?= base_url('MainC/Places/'.$sec4[2]->name) ?>" class="unit-1 text-center">
          <img src="<?= base_url('assets/images/') . $sec4[2]->img ?>" alt="Image" class="img-fluid">

          <div class="unit-1-text">
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

        <div class="unit-4 d-flex">
          <div>
            <h3>
              <div class="text-uppercase"> <b><?= $sec4[0]->name ?></b></div>
            </h3>
            <p><?= $sec4[0]->des ?> </p>
            <p><a href="<?= base_url('MainC/Places/'.$sec4[0]->name) ?>" class="btn m-auto">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="<?= base_url('MainC/Places/'.$sec4[1]->name) ?>" class="unit-1 text-center"><br>
          <img src="<?= base_url('assets/images/') . $sec4[1]->img ?>" alt="Image" class="img-fluid">

          <div class="unit-1-text">
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div>
            <h3>
              <div class="text-uppercase"><b><?= $sec4[2]->name ?></b></div>
            </h3>
            <p><?= $sec4[2]->des ?></p>
            <p><a href="<?= base_url('MainC/Places/'.$sec4[2]->name) ?>" class="btn m-auto">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col text-center"><br><br>
      <a href="<?= base_url('MainC/All/foodstuff') ?>" style="color:black;"
        class="btn btn-outline-default btn-round btn-white btn-lg">View All Dishes</a>
    </div>
  </div>
</div>
<!-- <script>
  $(document).ready(function()
  {
    setTimeout(function()
    {
  $('#popup').css('display','block'); }, 3000);
  });

    // $('.submitId').click(function(){
    // $('#popup').css('display','none');
    // });
</script> -->
