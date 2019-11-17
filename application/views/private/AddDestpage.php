
<?php include('header.php') ?>




      <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Destination Page</h5>
              </div>
              <div class="card-body">
              <!-- Code Of Edit form -->
              <?php if(!$up):?>
                <?php echo form_open_multipart('UserC/AddDestpage');?>  
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter a Name" name="Name" id="Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Descripition:</label>
                      <textarea class="form-control textarea" name="Descripition" id="Descripition">Oh ... you want to add description related to your content....</textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Image :</label>
                      <input type="file" class="form-control form-control-file" placeholder="Image" name="userfile" id="Image"> <button class="btn btn-info">Upload </button>
                    </div>
                  </div>

                <!-- code foe checkbox -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Want to display this:  </label>
                      <input type="checkbox"  name="Checkbox" id="Checkbox">
                    </div>
                  </div>


                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Add Content</button>
                    </div>
                  </div>
<!-- Code of Update Form -->
                  <?php else: ?>
                  <?= form_open_multipart('UserC/editDestpage/'.$UserData[0]->id);?>   

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter a Name" name="Name" id="Name" value="<?=  $UserData[0]->name?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Descripition:</label>
                      <textarea class="form-control textarea" name="Descripition" id="Descripition" ><?=  $UserData[0]->des?></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                    <input type="file" class="form-control form-control-file" placeholder="Image" name="userfile" id="Image"> <button class="btn btn-info">Upload </button>
                    </div>
                  </div>             

                  <div class="col-md-12">
                  <img src="<?= base_url('/assets/images/despage/').$UserData[0]->img ?>"  width="200"> 
                  </div>

</br>
                    <!-- code for checkbox -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>You Want To Display this:</label>
                        <input type="checkbox" class="form-control"  name="Checkbox" id="Checkbox" checked>
                      </div>
                    </div>
                  </div>
                  
                  

                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Content</button>
                    </div>
                  </div>

                  <?php endif ?>
                </form>
              </div>
            </div>
          </div>

              
              
                
            

            
           
    

 
<?php include('Footer.php');?>