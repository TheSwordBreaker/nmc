<div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <div class="card-title ">
                  <h4 > Simple Table 
                  <a role="button" class="btn btn-sm btn-success btn-round float-right" href="<?= base_url('UserC/LoadAdd/').$k?>">
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
                      Selected
                      </th>
                      
                      <th>
                       Id
                      </th>

                <?php if(isset($UserData[0]->name)): ?>
                      <th>
                      Name
                      </th>
                <?php endif ?>

                <?php if(isset($UserData[0]->des)): ?>
                      <th>
                      Des 
                 </th>
            
                <?php endif ?>

                <?php if(isset($UserData[0]->img)): ?>
                      <th style="width:fit-content;">
                      Img 
                 </th>
                <?php endif ?>

                <?php if(isset($UserData[0]->username)): ?>
                      <th>
                      Username
                      </th>
                <?php endif ?>

            </tr></thead>


                        <tbody>
                        <?php foreach($UserData as $d):?>
                          <tr>

                          <td scope="row" width="5%"> 
                          <?php   if($d->active==1):?>
                          <input type="checkbox" style="text-align:center;" checked> 
                      <?php else:?>                      
                          <input type="checkbox" style="text-align:center;" >
                      <?php endif;?>
                      
                          </td>

                          <td scope="row" width="5%"> <?= $d->id ?></td>


                          <?php if(isset($UserData[0]->name)): ?>
                            <td width="10%"> <?= $d->name ?>  </td>
                            <?php endif ?>

                          <?php if(isset($UserData[0]->des)): ?>
                          <td width="50%"> <?= $d->des ?>  </td>
                          <?php endif ?>

                          <?php if(isset($UserData[0]->username)): ?>
                          <td width="10%"> <?= $d->username ?>  </td>
                          <?php endif ?>
                          
                          <?php if(isset($UserData[0]->img)): ?>
                            <td width="30%"> <img src="<?= base_url('/assets/images/').$k."/".$d->img ?>"  style="width:250px"> </td>
                          <?php endif ?>

                          <?php if(isset($UserData[0]->id)): ?>
                            <td class="flex" width="20%"><button class="btn btn-info btn-round m-2"  onclick="ConfirmUpdate(<?= $d->id?>)">Edit</a>
                              <button class="btn btn-danger btn-round"  onclick="ConfirmDel(<?= $d->id?>)">Delete</a></td>
                          <?php endif ?>
              
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
