<?php if(!$C):?>



<div class="col-md-12">
    <div class="card">
        <div class="card-header ">
            <div class="card-title ">
                <h4> <span class="text-capitalize"><?= $k ?> </span> Table
                    <a role="button" class="btn btn-sm btn-success btn-round float-right"
                        href="<?= base_url('UserC/Change/').$k?>">
                        <small class="">Change</small>
                    </a>
                </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead class=" text-primary">
                        <tr>

                            <th>
                                Id
                            </th>

                            <?php if($this->db->field_exists("name",$k)): ?> <th>
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

                        </tr>
                    </thead>


                    <tbody>
                        <?php foreach($UserData as $d):?>

                          <?php if($d->active):?>
                        <tr>


                            <td scope="row" width="5%"> <?= $d->id ?></td>


                            <?php if($this->db->field_exists("name",$k)): ?>
                            <td width="10%"> <?= $d->name ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("des",$k)): ?>
                            <td width="50%"> <?= $d->des ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists('username',$k)): ?>
                            <td width="10%"> <?= $d->username ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("img",$k)): ?>
                            <td width="30%"> <img src="<?= base_url('/assets/images/').$d->img ?>" style="width:250px">
                            </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("id",$k)): ?>
                            <td class="flex" width="20%"><button class="btn btn-info btn-round m-2"
                                    onclick="ConfirmUpdate(<?= $d->id?>)">Edit</a>

                                    <?php endif ?>

                        </tr>

                        <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div>
</div>


<?php else:?>


    <?php echo form_open_multipart('UserC/FinalChange/'.$k); ?>  

<div class="col-md-12">
    <div class="card">
        <div class="card-header ">
            <div class="card-title ">
                      <h4> <span class="text-capitalize"><?= $k ?> </span> Table
                    <a role="button" class="btn btn-sm btn-success btn-round float-right"
                        href="<?= base_url('UserC/LoadAdd/').$k?>">
                        <small class="">Add context</small>
                    </a>

                    <button type="submit" class="btn btn-primary btn-round" name="submit">Confirm Changes</button>


                    <!-- <a role="button" class="btn btn-sm btn-success btn-round float-right"
                        href="<?= base_url('UserC/FinalChange/').$k?>">
                        <small class="">Confirm Changes</small>
                    </a> -->
                </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead class=" text-primary">
                        <tr>
                            <?php if($this->db->field_exists("active",$k)): ?> <th>
                            <th>
                                Status
                            </th>
                            <?php endif ?>

                            <th>
                                Id
                            </th>

                            <?php if($this->db->field_exists("name",$k)): ?> <th>
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

                        </tr>
                    </thead>


                    <tbody>
                        <?php for($i=0; $i < 4; $i++):?> 
                            
                        <tr>
                            <?php if($this->db->field_exists("active",$k)): ?> <th>

                            <td scope="row" width="5%" class="text-center" id="myid<?= $i?>">
                                
                             <input type="checkbox" name="check_list[]" value="<?= $data[$i]->id ?>"  style="text-align:center;">
                                

                            </td>
                            <?php endif ?>

                            <td scope="row" width="5%"> <?= $data[$i]->id ?></td>

                            <?php if($this->db->field_exists("name",$k)): ?>
                            <td width="10%"> <?= $data[$i]->name ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("des",$k)): ?>
                            <td width="50%"> <?= $data[$i]->des ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("id",$k)): ?>
                            <td class="flex" width="20%"> 
                                    <button class="btn btn-danger btn-round"
                                        onclick="ConfirmDel(<?= $data[$i]->id?>)">Delete</a></td>
                            <?php endif ?>

                        </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div>
</div>

<?php endif ?>


<!--<?php if($this->db->field_exists('username',$k)): ?> 
                            <td width="10%"> <?= $d->username ?> </td>
                            <?php endif ?>

                            <?php if($this->db->field_exists("img",$k)): ?>
                            <td width="30%"> <img src="<?= base_url('/assets/images/').$d->img ?>" style="width:250px">
                            </td>
                            <?php endif ?>

                           
                            -->