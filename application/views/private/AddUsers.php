
<?php include('header.php') ?>




      <div class="col-md-8">
            <div class="card card-user">
            <?php if(!$up):?>
              <div class="card-header">
                <h5 class="card-title">Add Homepage</h5>
              </div>
              <div class="card-body">
              
              <form action="<?= base_url('UserC/AddUser')?>" method="post"> 
                  
                <div class="row">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Username:</label>
                      <input type="text" class="form-control" placeholder="Enter a Username" name="username" id="username">
                    </div>
                  </div>
                </div>

                <div class="row">                
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="text" class="form-control" placeholder="Enter a Password" name="password" id="password">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Add Content</button>
                  </div>
                </div>

                  <?php else: ?>
                  <div class="card-header">
                <h5 class="card-title">Edit Homepage</h5>
              </div>
              <div class="card-body">
                  <form action="<?= base_url('UserC/EditUsers/').$UserData[0]->id ?>" method="post">     

                  <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= $UserData[0]->username?>">
                </div>
                
                    </div>
                  </div>
                  
                  
                  <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Password:</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?=  $UserData[0]->password?>">
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
          <div class="clearfix"></div>
    </div>

             
          
                
                
                
            

          

         

 
<?php include('Footer.php');?>