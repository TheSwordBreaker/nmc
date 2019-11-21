<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    Nashik Tourism &mdash; Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/login.css') ?> " rel="stylesheet" >
</head>


<body class="login-page sidebar-collapse">
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
          <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
            <a class="nav-link" href="<?= base_url('MainC/AboutUs')?>">
              <b> About Us </b>
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
  <div class="page-header header-filter " style="background-image: url(<?= base_url('assets/images/KumbhMela.jpg') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form role="form" action="<?= base_url('/WorkC/AuthUser')?>" method="post">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              <p class="description text-center">Or sign in with credentials</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">perm_identity</i>
                    </span>
                  </div>
                  <input class="form-control" placeholder="Username" type="username" name="username">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input class="form-control" placeholder="Password" type="password" name="password">
                </div>
                <br>
                <div class="togglebutton" style="padding-left: 15px; font-family: verdana;">
                <label>
                  <input type="checkbox" >
                  <span class="toggle"></span>
                    Remember me
                </label>
              </div>
              </div>
              
              <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
            </form>
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
            <a href="<?= base_url('MainC/Dest')?>">
              About Us
            </a>
          </li>
          <li>
            <a href="<?= base_url('MainC/Dest')?>">
             Destination
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
  <script src="<?= base_url('/assets/js2/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js2/core/popper.min.js') ?>" type="text/javascript"></script>
  <!-- <script src="<?= base_url('/assets/js2/core/bootstrap-material-design.min.js')?>" type="text/javascript"></script> -->
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js2/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="<?= base_url('/assets/js2/plugins/moment.min.js') ?>" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('/assets/js2/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('/assets/js2/login.js') ?>" type="text/javascript"></script>

  <script src="<?= base_url('/assets/js2/owl.carousel.js') ?>"></script>
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