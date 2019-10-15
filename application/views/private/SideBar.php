<div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="dashboard.html" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img <?= base_url('/assets/images/logo-small.png')?>>
          </div>
        </a>
        <a href="dashboard.html" class="simple-text logo-normal">
          Nashik Tourism
          <!-- <div class="logo-image-big">
            <img <?= base_url('/assets/images/logo-big.png')?>"
          </div> -->
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?= base_url('UserC') ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li>
              <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('UserC/ViewHomePage') ?>">Home</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/ViewDestpage') ?>">Destination</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/ViewCulturePage') ?>">Culture</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/ViewUsers') ?>">Users</a>

                </div>
              <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-single-copy-04" ></i>
                    <p>Pages<b class="caret"></b></p>
                </a>
            </li>
          <li>
            <a href="./map.html">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>Posts</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>