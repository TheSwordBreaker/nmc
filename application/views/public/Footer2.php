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