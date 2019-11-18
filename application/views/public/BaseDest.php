<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Nashik Tourism &mdash; Destination
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/login.css') ?> " rel="stylesheet">

<body>
  
<?php require('Navbar2.php'); ?>




  <div class="page-header header-filter" data-parallax="true" style="background-image: url(<?= base_url('assets/images/dham.jpg') ?>);">
    
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Your main section here</h2>
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