<?php if (!$C) : ?>



    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                <div class="card-title ">
                    <h4> <span class="text-capitalize"><?= $k ?> </span> Table
                        <a role="button" class="btn btn-sm btn-success btn-round float-right" href="<?= base_url('UserC/Change/') . $k ?>">
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

                                <?php if ($this->db->field_exists("name", $k)) : ?> <th>
                                        Name
                                    </th>
                                <?php endif ?>

                                <?php if ($this->db->field_exists("des", $k)) : ?>
                                    <th>
                                        Des
                                    </th>

                                <?php endif ?>

                                <?php if ($this->db->field_exists("img", $k)) : ?>
                                    <th style="width:fit-content;">
                                        Img
                                    </th>
                                <?php endif ?>

                                <?php if ($this->db->field_exists('username', $k)) : ?>

                                    <th>
                                        Username
                                    </th>

                                <?php endif ?>

                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($UserData as $d) : ?>

                                <?php if ($d->active) : ?>
                                    <tr>


                                        <td scope="row" width="5%"> <?= $d->id ?></td>


                                        <?php if ($this->db->field_exists("name", $k)) : ?>
                                            <td width="10%"> <?= $d->name ?> </td>
                                        <?php endif ?>

                                        <?php if ($this->db->field_exists("des", $k)) : ?>
                                            <td width="50%"> <?= $d->des ?> </td>
                                        <?php endif ?>

                                        <?php if ($this->db->field_exists('username', $k)) : ?>
                                            <td width="10%"> <?= $d->username ?> </td>
                                        <?php endif ?>

                                        <?php if ($this->db->field_exists("img", $k)) : ?>
                                            <td width="30%"> <img src="<?= base_url('/assets/images/') . $d->img ?>" style="width:250px">
                                            </td>
                                        <?php endif ?>

                                        <?php if ($this->db->field_exists("id", $k)) : ?>
                                            <td class="flex" width="20%"><button class="btn btn-info btn-round m-2" onclick="ConfirmUpdate(<?= $d->id ?>)">Edit</a>

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


<?php else : ?>







    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <div class="card-title ">
                    <?php echo form_open('UserC/FinalChange/' . $k,array('id'=>'form_change')); ?>
                    <div class="text-center">
                        <h2> <span class="text-capitalize"><?= $k ?> </span> Table
                        </h2>
                    </div>

                    <div class="bg-light ">

                        <button type="submit" class="btn btn-md btn-primary float-left " name="submit">Confirm
                            Changes</button>
                        <a role="button" class="btn btn-md btn-success float-right" href="<?= base_url('UserC/LoadAdd/') . $k ?>">
                            Add context
                        </a>
                    </div>

                </div>
            </div>

            <div class="container col-7" id="error" style="display: none;">

                <div class="alert alert-warning alert-with-icon" >
                    <button type="button" aria-hidden="true" class="close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                    <span id="message">This is a notification with close button and icon.</span>
                </div>
            </div>
            <div class="card-body mt-1 w-100">
                <div class="table-responsive">
                    <table class="table table-striped " id="change">
                        <thead class=" text-primary">
                            <tr>
                                <?php if ($this->db->field_exists("active", $k)) : ?> <th>
                                    <th>
                                        Status
                                    </th>
                                <?php endif ?>

                                <th>
                                    Id
                                </th>

                                <?php if ($this->db->field_exists("name", $k)) : ?> <th>
                                        Name
                                    </th>
                                <?php endif ?>

                                <?php if ($this->db->field_exists("des", $k)) : ?>
                                    <th>
                                        Des
                                    </th>

                                <?php endif ?>

                                <?php if ($this->db->field_exists("img", $k)) : ?>
                                    <th style="width:fit-content;">
                                        Img
                                    </th>
                                <?php endif ?>

                                <?php if ($this->db->field_exists('username', $k)) : ?>

                                    <th>
                                        Username
                                    </th>

                                <?php endif ?>

                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($data as $d) : ?>

                                <tr>
                                    <?php if ($this->db->field_exists("active", $k)) : ?> <th>

                                        <td scope="row" class="text-center">
                                            <?php if ($d->active) : ?>

                                                <input type="checkbox" name="check_list[]" value="<?= $d->id ?>" style="text-align:center;" checked>

                                            <?php else : ?>

                                                <input type="checkbox" name="check_list[]" value="<?= $d->id ?>" style="text-align:center;">


                                            <?php endif ?>


                                        </td>
                                    <?php endif ?>

                                    <td scope="row"> <?= $d->id ?></td>

                                    <?php if ($this->db->field_exists("name", $k)) : ?>
                                        <td> <?= $d->name ?> </td>
                                    <?php endif ?>

                                    <?php if ($this->db->field_exists("img", $k)) : ?>
                                        <td> <img src="<?= base_url('/assets/images/') . $d->img ?>" style="width:150px; height:70px">
                                        </td>
                                    <?php endif ?>



                                    <?php if ($this->db->field_exists("id", $k)) : ?>
                                        <td class="flex">
                                            <button type="button" class="btn btn-danger btn-md " id="">Delete</td>
                                    <?php endif ?>

                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    </from>
                </div>
            </div>
        </div>
    </div>

    <div>
    </div>

<?php endif ?>