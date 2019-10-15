<div class="container">
<?php if($this->session->flashdata('error')):?>
 <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> <?= $this->session->flashdata('error')?>
</div>
 <?php endif?>
 </div>



 <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th></th>
                      </tr>
                      <?php foreach($UserData as $d):?>
                      <tr>
                        <td> <?= $d->id ?></td>
                        <td> <?= $d->username ?>  </td>
                        <td> <?= $d->password ?>  </td>
                        <td><a class="btn btn-default" type="button" onclick="ConfirmUpdate(<?= $d->id?>)">Edit</a>
                         <a class="btn btn-danger del" type="button" onclick="ConfirmDel(<?= $d->id?>)">Delete</a></td>
                      </tr>
                      <?php endforeach ?>   
                      
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>