<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
        <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon.png')?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            <?= $Page[0]->title ?>
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="<?= base_url('/assets/css/login.css') ?>" rel="stylesheet">
        <!-- <link href="<?= base_url('/assets/css/loginpage.css?v=1.3.0') ?>" rel="stylesheet" /> -->
        
    </head>

    <body>

    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">

    <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('MainC/')?>">
            <i class="fa fa-plane"> </i>
            NASHIK TOURISM </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
            aria-label="Toggle navigation">
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
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="MainC")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/')?>">
                   Home  
                </a>
            </li>
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="AboutUs")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/AboutUs')?>">
                  About Nashik
                </a>
            </li>
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="AboutUs")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/info')?>">
                  information
                </a>
            </li>
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="Dest")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/Dest')?>">
                    Destination 
                </a>
            </li>
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="FoodStuff")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/FoodStuff')?>">
                    Food Stuff
                </a>
            </li>
            <li class="nav-item">
                <a class="<?=(basename($_SERVER['PHP_SELF'])=="Culture")?"nav-link-activex":"nav-link";?>" href="<?= base_url('MainC/Culture')?>">
                   Culture 
                </a>
            </li>
            <!-- <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
                <a class="nav-link" href="<?= base_url('WorkC/')?>">
                    <b> Login </b>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Follow us on Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Like us on Facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Follow us on Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li> -->
            <li class="nav-item nav-link">
            <form action="<?= base_url('MainC/Search')?>" method="post" class="form-inline ml-auto " >
                <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                  <i class="material-icons"> search</i>
                </button>
                <div class="form-group">
                    <input name="query" type="search" class="form-control" placeholder=" Search.." >
                  </div>
            </form>
            </li>
        </ul>
    </div>
    </div>
</nav>
    <div class="page-header header-filter responsive" data-parallax="true" style="background-image: url(<?= base_url('assets/images/') . $Page[0]->img ?>);">
    <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <h1 class="title">Welcome to Nashik</h1>
                    <h3>
                    Traveling - It leaves you speechless,then turns you into a Storyteller.
                    </h3>
                    <br>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Watch video
                    </a>
                    
                </div>
                
            </div>
           

        </div>
    </div>
        <div class="main main-raised">
            <div class="site-section">
                
                    <?= $Page['data'] ?>
            </div>
            <!-- <div class="section">
                <div class="container text-center">
                  <div class="row justify-content-md-center">
                    <div class="col-md-12 col-lg-8">
                      <h2 class="title">Completed with examples</h2>
                      <h5 class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</h5>
                    </div>
                  </div>
                </div>
              </div> -->
              
              <div class="section section-download" id="#download-section" data-background-color="black">
                <div class="container">
                  <!-- <div class="row justify-content-md-center">
                    <div class="text-center col-md-12 col-lg-8">
                      <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
                      <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD format. Start a new project or give an old Bootstrap project a new look!</h5>
                    </div>
                    <div class="text-center col-md-12 col-lg-8">
                      <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                        Download HTML
                      </a>
                      <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-lg btn-outline-primary btn-round" role="button">
                        Download PSD/Sketch
                      </a>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br> -->
                  <!-- <div class="row text-center mt-5">
                    <div class="col-md-8 ml-auto mr-auto">
                      <h2>Want more?</h2>
                      <h5 class="description">We've just launched
                        <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h5>
                    </div>
                    <div class="col-md-12">
                      <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">
                        <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
                      </a>
                    </div>
                  </div> -->
                  <br>
                  <div class="sharing-area text-center">
                      <div class="row justify-content-center">
                        <h3>Thank you for supporting us!</h3>
                      </div>
                      <button id="twitter" class="btn btn-raised btn-twitter sharrre">
                        <i class="fa fa-twitter"></i> Tweet
                      </button>
                      <button id="facebook" class="btn btn-raised btn-facebook sharrre">
                        <i class="fa fa-facebook-square"></i> Share
                      </button>
                      <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
                        <i class="fa fa-google-plus"></i> Share
                      </button>
                      <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
                        <i class="fa fa-github"></i> Star
                      </a>
                    </div>
                </div>
              </div>
        </div>
        <footer class="footer" data-background-color="black">
            <div class="container text-center">
                <!-- <nav>
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
                            <a href="<?= base_url('MainC/Dest')?>">
                                Destination
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('MainC/Cul')?>">
                                Culture
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('MainC/FoodStuff')?>">
                                Food Stuff
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('WorkC/')?>">
                                Login
                            </a>
                        </li> -->
                    <!-- </ul> -->
                    <div class="copyright text-center" style="font-family: verdana; font-size: 15px;">
                        © 2019 Nashik Tourism. All rights reserved | Design by GPN Students
                    </div>
                </nav>
            </div>
        </footer>
        <!--   Core JS Files   -->
        <script src="<?= base_url('/assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('/assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('/assets/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript">
        </script>
        <script src="<?= base_url('/assets/js/plugins/moment.min.js') ?>"></script>
        <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="<?= base_url('/assets/js/plugins/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="<?= base_url('/assets/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url('/assets/js/login.js') ?>" type="text/javascript"></script>
        <script>
        


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