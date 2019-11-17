<?php include('header.php') ?>


               
      


      <div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <div class="card-title ">
                  <h4 > Simple Table 
                  <a role="button" class="btn btn-sm btn-success btn-round float-right" href="<?= base_url('UserC/LoadAddDestpage')?>">
                  <small class="">Add context</small>
                  </a>
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped ">
                    <thead class=" text-primary">
                      <tr>
                      <th>Checked</th>
                      <th>
                       Id
                      </th>
                      <th>
                      Name
                      </th>
                      <th class="">
                       Des
                      </th>

                      <th>
                    Image
                      </th>
                      
                    </tr></thead>
                    <tbody>
                    <?php foreach($UserData as $d):?>
                      <tr>
                      <td>
                      <?php   if($d->active==1):?>
                          <input type="checkbox" style="text-align:center;" checked> 
                      <?php else:?>                      
                          <input type="checkbox" style="text-align:center;" >
                      <?php endif;?>
                      </td>
                      <td scope="row"> <?= $d->id ?></td>
                        <td> <?= $d->name ?>  </td>
                        <td> <?= $d->des ?>  </td>
                        <td> <img src="<?= base_url('/assets/images/despage/').$d->img ?>"  width="200"> </td>
                        <td><button class="btn btn-info btn-round "  onclick="ConfirmUpdate(<?= $d->id?>)">Edit</a>
                         <button class="btn btn-danger btn-round"  onclick="ConfirmDel(<?= $d->id?>)">Delete</a></td>
                      </tr>
                      <?php endforeach ?> 
                    </tbody>
                  </table>
                  <button type="button" class="btn btn-success">Submit</button>

                </div>
              </div>
            </div>
          </div>

      <div>
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
                </script>, made with <i class="fa fa-heart heart"></i> by GPNashik Students
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('/assets/js2/core/jquery.min.js')?>"></script>
  <script src="<?= base_url('/assets/js2/core/popper.min.js')?>"></script>

  <script src="<?= base_url('/assets/js2/core/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('/assets/js2/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url('/assets/js2/plugins/chartjs.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('/assets/js2/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('/assets/js2/paper-dashboard.min.js')?>"></script>
  <!-- TP -->
  <script src="<?= base_url('/assets/demo/demo.js')?>"></script>
  <script>
        var url="<?php echo base_url();?>";
        function ConfirmDel(id){
        var r=confirm("Do you want to delete this?")
        if (r==true)
        window.location = url+"UserC/RemoveDestpage/"+id;
        else
          return false;
        } 

        function ConfirmUpdate(id){
        var r=confirm("Do you want to Update this?")
        if (r==true)
        window.location = url+"UserC/loadEditDestpage/"+id;
        else
          return false;
        } 

        $(document).ready(function() {
      // Javascript methods body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
        </script>
</body>

</html>