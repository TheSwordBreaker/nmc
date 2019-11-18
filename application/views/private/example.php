
<div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <div class="card-title ">
                  <h4 > Simple Table 
                  <a role="button" class="btn btn-sm btn-success btn-round float-right" href="<?= base_url('UserC/LoadAddHomePage')?>">
                  <small class="">Add context</small>
                  </a>
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped ">
                    <thead class=" text-primary">
                      <tr><th>
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
                      <td scope="row"> <?= $d->id ?></td>
                        <td> <?= $d->name ?>  </td>
                        <td> <?= $d->des ?>  </td>
                        <td> <img src="<?= base_url('/assets/images/homepage/').$d->img ?>"  width="200"> </td>
                        <td><button class="btn btn-info btn-round "  onclick="ConfirmUpdate(<?= $d->id?>)">Edit</a>
                         <button class="btn btn-danger btn-round"  onclick="ConfirmDel(<?= $d->id?>)">Delete</a></td>
                      </tr>
                      <?php endforeach ?> 
                    </tbody>
                  </table>
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
                </script> Nashik Tourism. All rights reserved | Design by GPN Students
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
