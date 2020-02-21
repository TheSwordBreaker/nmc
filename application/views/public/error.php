
<div class="container">
<?php if($this->session->flashdata('error')):?>
 <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Invalid data !</strong>  <?= $this->session->flashdata('error')?>
</div>
<?php endif;
 $this->session->unset_userdata('error'); ?>
 </div>