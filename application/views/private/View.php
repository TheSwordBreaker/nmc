<div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <div class="card-title ">
                  <h4 > <span class="text-capitalize"><?= $k ?> </span> Table 
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
                      <tr>
                      <?php if($this->db->field_exists("active",$k)): ?>                      <th>
                        <th>
                      Selected
                      </th>
                      <?php endif ?>
                      
                      <th>
                       Id
                      </th>

                      <?php if($this->db->field_exists("name",$k)): ?>                      <th>
                      Name
                      </th>
                <?php endif ?>

            <?php if($this->db->field_exists("des",$k)): ?>
              <th>
                Des 
                 </th>
                 
                 <?php endif ?>
                 
                 <?php if($this->db->field_exists("img",$k)): ?>
                  <th style="width:fit-content;">
                      Img 
                    </th>
                    <?php endif ?>
                    
                    <?php if($this->db->field_exists('username',$k)): ?>
                      
                      <th>
                        Username
                      </th>

                <?php endif ?>

            </tr></thead>


                        <tbody>
                        <?php foreach($UserData as $d):?>
                          <tr>
                          <?php if($this->db->field_exists("active",$k)): ?>                      <th>
                      
                          <td scope="row" width="5%"> 
                          <?php   if($d->active==1):?>
                          <input type="checkbox" style="text-align:center;" checked> 
                      <?php else:?>                      
                          <input type="checkbox" style="text-align:center;" >
                      <?php endif;?>
                      
                          </td>
                          <?php endif ?>

                          <td scope="row" width="5%"> <?= $d->id ?></td>


                          <?php if($this->db->field_exists("name",$k)): ?>
                            <td width="10%"> <?= $d->name ?>  </td>
                            <?php endif ?>
                            
                            <?php if($this->db->field_exists("des",$k)): ?>
                              <td width="50%"> <?= $d->des ?>  </td>
                              <?php endif ?>
                              
                              <?php if($this->db->field_exists('username',$k)): ?>
                          <td width="10%"> <?= $d->username ?>  </td>
                          <?php endif ?>
                          
                          <?php if($this->db->field_exists("img",$k)): ?>
                            <td width="30%"> <img src="<?= base_url('/assets/images/').$d->img ?>"  style="width:250px"> </td>
                          <?php endif ?>

                          <?php if($this->db->field_exists("id",$k)): ?>
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
   
    
