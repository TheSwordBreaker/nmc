<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/icons/plane.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Nashik Tourism &mdash; About Us
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/login.css') ?> " rel="stylesheet" />
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
              <a href="./index.html" class="dropdown-item">
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
            <a class="nav-link" href="<?= base_url('MainC/Dest')?>">
              <b> Destination </b>
            </a>
          </li>
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
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
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter " data-parallax="true" style="background-image: url(<?= base_url('assets/images/j6.jpg') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <!-- <h2><b> Never Stop Exploring </b></h2> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2>Visit Our Sponsors Websites!!!</h2>
            <h4>This websites is sponsored by NMC ( Nashik Municipal Corporation ) website which can also help you for your official work...!!! and this site also provides more information about Nashik city...!!!</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-examples">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-md-6">
            <a href="https://nashikcorporation.in/" target="_blank">
              <img src="<?= base_url('./assets/images/NMC.png')?>" alt="Rounded Image" class="img-raised rounded img-fluid">
              <button class="btn  btn-link btn-primary btn-lg">View NMC</button>
            </a>
          </div>
          <div class="col-md-6">
            <a href="https://nashikcorporation.in/article/index/id/1#tabs|History:tab1" target="_blank">
              <img src="<?= base_url('./assets/images/NMC_about.png')?>" alt="Rounded Image" class="img-raised rounded img-fluid">
              <button class="btn btn-link btn-primary btn-lg">View About Page</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    
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
            <a href="<?= base_url('MainC/About Us')?>">
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