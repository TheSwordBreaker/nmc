<div class="col-md-8">
      <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Add <?= $k ?></h5>
        </div>
        <div class="card-body">
        <?php if(!$up):?>
          <?php echo form_open_multipart('UserC/Add/'.$k); ?>  

          <?php if($this->db->field_exists("name",$k)): ?>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" placeholder="Enter a Name" name="Name" id="Name">
                </div>
                <?php echo form_error('Name');?>
              </div>
            </div>
            <?php endif ?>

            <?php if($this->db->field_exists("des",$k)): ?>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <label>Descripition:</label>
                <textarea class="form-control textarea"  name="Descripition" id="Descripition">Oh ... you want to add description related to your content....</textarea>
                </div>
                <?php echo form_error('Descripition','<div class="p-2 bg-danger text-white">', '</div>');?>
              </div>
            </div>
            <?php endif ?>

            <?php if($this->db->field_exists('link',$k)): ?>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>link:</label>
                  <input type="text" class="form-control" placeholder="Enter a link" name="link" id="link" >
                </div>
              </div>
            </div>

            <?php endif ?>

            <?php if($this->db->field_exists('map',$k)): ?>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>link:</label>
                  <input type="text" class="form-control" placeholder="Enter a link" name="link" id="link" >
                </div>
              </div>
            </div>

            <?php endif ?>


            <?php if($this->db->field_exists("username",$k)): ?>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>UserName:</label>
                  <input type="text" class="form-control" placeholder="Enter a Name" name="username" id="username">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter a Name" name="password" id="password">
                </div>
              </div>
            </div>

            <?php endif ?>

            <?php if($this->db->field_exists("img",$k)): ?>

            <div class="col-md-12">
              <div class="form-group">
                <label>Image :</label>
                <input type="file" class="form-control form-control-file" placeholder="Image" name="userfile" id="Image"> <button class="btn btn-info">Upload </button>
              </div>
            </div>
            <?php endif ?>


          

            

            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Add Content</button>
              </div>
            </div>

            <?php else: ?>
            <?= form_open_multipart('UserC/edit/'.$k."/".$UserData[0]->id);?>   
            
            <?php if($this->db->field_exists('name',$k)): ?>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" placeholder="Enter a Name" name="Name" id="Name" value="<?=  $UserData[0]->name?>">
                </div>
                <?php echo form_error('Name');?>
              </div>
            </div>

            <?php endif ?>

            <?php if($this->db->field_exists('link',$k)): ?>
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>link:</label>
                  <input type="text" class="form-control" placeholder="Enter a link" name="link" id="link" value="<?=  $UserData[0]->link?>">
                </div>
              </div>
            </div>

            <?php endif ?>

<?php if($this->db->field_exists('des',$k)): ?>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <label>Descripition:</label>
                <textarea class="form-control textarea" name="Descripition" id="Descripition" ><?=  $UserData[0]->des?></textarea>
                </div>
              </div>
            </div>

            <?php endif ?>

            <?php if($this->db->field_exists('username',$k)): ?>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>UserName:</label>
                  <input type="text"  value="<?= $UserData[0]->username ?>" class="form-control"  name="username" id="username">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
              </div>
            </div>

            <?php endif ?>



            <?php if($this->db->field_exists('img',$k)): ?>

            <div class="col-md-12">
              <div class="form-group">
              <input type="file" class="form-control form-control-file" placeholder="Image" name="userfile" id="Image"> <button class="btn btn-info">Upload </button>
              </div>
            </div>             

            <div class="col-md-12">
            <img src="<?= base_url('/assets/images/despage/').$UserData[0]->img ?>"  width="200"> 
            </div>
            
            <?php endif ?>

            


            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round" onclick="ConfirmUpdate(<?= $UserData[0]->id ?>)">Update Content</button>
              </div>
            </div>

            <?php endif ?>
          </form>
        </div>
      </div>
    </div>

        
        
          
      

      
     



