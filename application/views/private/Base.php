<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/images/apple-icon.png')?>">
        <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon.png')?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?= $Page['title'] ?></title>
        <!-- <title>Admin Area | Dashboard</title> -->
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="<?= base_url('/assets/admin/css/bootstrap.min.css')?>" rel="stylesheet" />
        <link href="<?= base_url('/assets/admin/css/paper-dashboard.css')?>" rel="stylesheet" />
        <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>


    </head>

    <body class="">
        <div class="wrapper ">

            <?php include('SideBar.php') ?>

            <div class="main-panel">
                <!-- Navbar -->

                <?php include('Navbar.php') ?>

                <?php include('error.php') ?>




                <?= $Page['data'] ?>




            </div>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>

                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            ©
                            <script>
                            document.write(new Date().getFullYear())
                            </script> Nashik Tourism. All rights reserved | Design by GPN Students
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </div>
        <!--   Core JS Files   -->
        <script src="<?= base_url('/assets/admin/js/core/jquery.min.js')?>"></script>
        <script src="<?= base_url('/assets/admin/js/core/popper.min.js')?>"></script>

        <script src="<?= base_url('/assets/admin/js/core/bootstrap.min.js')?>"></script>
        <script src="<?= base_url('/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
        <!--  Google Maps Plugin    -->
        <!--  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
        <!-- Chart JS -->
        <script src="<?= base_url('/assets/admin/js/plugins/chartjs.min.js')?>"></script>
        <!--  Notifications Plugin    -->
        <script src="<?= base_url('/assets/admin/js/plugins/bootstrap-notify.js')?>"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url('/assets/admin/js/paper-dashboard.min.js')?>"></script>
        <!-- TP -->
        <script src="<?= base_url('/assets/admin/demo/demo.js')?>"></script>
        <script>
        var url = "<?php echo base_url();?>";
        var k = "<?= $k ?>";
        var sec_no = 0; 
        <?php if (isset($sec_no[$k])): ?>
            
            
            sec_no = "<?= trim($sec_no[$k]) ?>"; 
           
            
            
        <?php endif ?>
        console.log(<?= $sec_no[$k] ?>)
        console.log("<?= $k ?>")
        console.log(sec_no);
       
            function set_error(msg) {
                $("#error").find("#message").text(msg);
                $("#error").show();
            }

        $(document).ready(function() {

            $('#form_change').submit(function(e) {

                $("#error").hide();
                var checkCount = $(":checked").length;

                if (checkCount == 0) {
                    set_error("No CheckBox are selected");
                    e.preventDefault();
                } else if (!(checkCount == sec_no)) {
                    set_error("Only " + sec_no + " checkbox can be submmited")
                    e.preventDefault();
                }

            });

            $(".close").on("click", function() {

                $('#error').hide();
            })

            $(".del").on("click", function() {
                var $checkbox = $(this).closest('tr').find(":checkbox");
                var rowCount = $('#change tbody tr').length;
                console.log(rowCount);
                if (rowCount <= sec_no) {

                    set_error("minmium " + sec_no + "row must be needed " + rowCount);
                    // $(this).attr("disabled", true);
                } else if ($checkbox.is(":checked")) {

                    set_error("Checked rows can't be deleted");
                    // $(this).attr("disabled", true);
                } else if (sec_no == 0) {

                    var hide =  $(this).closest('tr').find(":hidden");
                    var id = hide.attr("value");
                    
                    var r = confirm("Do you want to Delete this?")
                    if (r == true)
                        window.location = url + "UserC/Remove/" + k + "/" + id;
                    else
                        return false;
                    
                } else {
                    var hide =  $(this).closest('tr').find(":checkbox");
                    var id = hide.attr("value");
                    var r = confirm("Do you want to Delete this?")
                    if (r == true)
                        window.location = url + "UserC/Remove/" + k + "/" + id;
                    else
                        return false;

                }
            });

        });

        function ConfirmUpdate(id) {
            var r = confirm("Do you want to Update this?")
            if (r == true)
                window.location = url + "UserC/loadEdit/" + k + "/" + id;
            else
                return false;
        }

        $("ul.nav li").on("click", function() {
            $("ul.nav li").removeClass("active");
            $(this).addClass("active");
        });
        </script>

    </body>

</html>