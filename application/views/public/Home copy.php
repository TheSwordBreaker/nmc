<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/images/plane.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Nashik Tourism 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/login.css') ?> " rel="stylesheet">
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('MainC/')?>">
          <i class="fa fa-plane"> </i>
           NASHIK TOURISM  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="dropdown nav-item" style="letter-spacing: 1px; font-family: verdana;">
            <a href="index.html" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">home</i><b> Home </b>
            </a>
             <div class="dropdown-menu dropdown-with-icons">
              <a href="/index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
            </div> 
          </li> -->
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;" >
            <a class="nav-link" href="<?= base_url('MainC/')?>">
              <b> Home </b>
            </a>
          </li>
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;" >
            <a class="nav-link" href="<?= base_url('MainC/AboutUs')?>">
              <b> About Us </b>
            </a>
          </li>
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;" >
            <a class="nav-link" href="<?= base_url('MainC/Cul')?>">
              <b> Culture </b>
            </a>
          </li>
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
            <a class="nav-link" href="<?= base_url('WorkC/')?>">
              <b> Login </b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url(<?= base_url('assets/images/dham.jpg') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h2>Never Stop Exploring </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="site-section">
      <h2 class="font-weight-light text-black text-center" style="font-family: verdana;">Our Attractions!!!</h2><br><br><br>
      <div class="container" style="font-family: verdana;">
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
                <p style="text-align: justify;"><?= $data[$i]->des ?></p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
        <div class="col text-center">
          <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
      </div>
      </div>
  </div>
  <div class="page-header header-filter site-blocks-cover overlay inner-page-cover" style="background-image: url(<?= base_url('assets/').$sec2[0]->img ?>); background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 responsive "><br>
          <h3 class="font-weight-light text-white " style="font-size: 25px; "><?= $sec2[0]->name ?> -</h3><br>
    <p class="font-weight-light text-white" style="text-align: justify; font-size: 18px; "><?= $sec2[0]->des?> </p>
    <h5><a href="<?= base_url('MainC/AboutUs')?>" class="view rew3"><i class="fa fa-hand-o-right" aria-hidden="true">&nbsp;</i>About Us</a></h5>
         <!-- <a href="<?= base_url('assets/video/1.mp4')?>" class="play-single-big mb-4 d-inline-block popup-vimeo"><i class="material-icons" style="color: #ffff; font-size: 70px; ">play_circle_outline</i></a> -->
         <!-- <h2 class="text-white font-weight-light mb-5 h1">Experience Our Outstanding Services</h2> -->
          
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="about  py-6" id="about">
    <div class="container" style="height:800px; font-family: verdana;"><br><br>
      <h2 class="text-black text-center" style="font-family: verdana;">Culture!!!</h2>
				  <p class="iner mt-4" style="font-size: 15px; text-align: center;"><?=$sec3[0]->name1 ?>!!!</p>
					<p class="iner mt-4" style="font-size: 15px; text-align: center;"><?= $sec3[0]->name2 ?></p>
					<br>
                <img src="<?= base_url('assets/images/homeCul.jpg') ?>" class="responsive" alt="">
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
              <img src="<?= base_url('assets/').$sec4[0]->img ?>" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div><br>
                <h3><b><?= $sec4[1]->name ?></b></h3>
                <p><?= $sec4[1]->des ?></p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
                <img src="<?= base_url('assets/').$sec4[2]->img ?>" alt="Image" class="img-fluid"> 

              <div class="unit-1-text">
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            
            <div class="unit-4 d-flex">
              <div><br>
                <h3><b><?= $sec4[0]->name ?></b></h3>
                <p><?= $sec4[0]->des ?> </p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
                <img src="<?= base_url('assets/').$sec4[1]->img ?>" alt="Image" class="img-fluid"> 

              <div class="unit-1-text">
              </div>
            </a>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div><br>
                <h3><b><?= $sec4[2]->name ?></b></h3>
                <p><?= $sec4[2]->des ?></p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div><br>
        </div>
        <div class="col text-center">
          <a href="#" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View All Events</a>
      </div>
      </div>
    </div>
    <br><br><br>
    
  </div>
  
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="<?= base_url('MainC/')?>">
              Home
            </a>
          </li>
          <li>
            <a href="<?= base_url('MainC/AboutUs')?>">
              About Us
            </a>
          </li>
          <li>
            <a href="<?= base_url('MainC/Cul')?>">
              Culture
            </a>
          </li>
          <li>
            <a href="<?= base_url('WorkC/')?>">
              Login
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right" style="font-family: verdana; font-size: 15px;">
        © 2019 Nashik Tourism. All rights reserved | Design by GPN Students
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url('/assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js/plugins/moment.min.js') ?>"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?= base_url('/assets/js/plugins/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('/assets/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('/assets/js/login.js') ?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
</body>

</html>