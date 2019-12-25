<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">

    <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url('MainC/')?>">
            <i class="fa fa-plane"> </i>
            NASHIK TOURISM </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <!-- <li class="dropdown nav-item" style="letter-spacing: 1px; font-family: verdana;">
        <a href="index.html" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="material-icons">home</i><b> Home </b>
        </a>
          <div class="dropdown-menu dropdown-with-icons">
          <a href="/index.html" class="dropdown-item">
            <i class="material-icons">layers</i> All Components
          </a>
        </div> 
      </li> -->

        <?php foreach($Page['navbar'] as $nav): ?>
        <?php if($nav->active): ?>
        <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
                <a class="nav-link" href="<?= base_url($nav->link)?>">
                <b> <?= $nav->name ?> </b>
            </a>
        </li>
        
        <?php endif ?>
        <?php endforeach ?>
        
        <!-- <li class="nav-item" style="letter-spacing: 1px; font-family: verdana;">
                <a class="nav-link" href="<?= base_url('WorkC/')?>">
                    <b> Login </b>
                </a>
            </li> -->
            <form action="<?= base_url('MainC/Search')?>" method="post" class="form-inline ml-auto" >
                <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                  <i class="material-icons">search</i>
                </button>
                <div class="form-group ">
                    <input name="query" type="search" class="form-control" placeholder=" Search.." >
                  </div>
              </form>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Follow us on Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Like us on Facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank"
                    data-original-title="Follow us on Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>

            
        </ul>
    </div>
    </div>
</nav>