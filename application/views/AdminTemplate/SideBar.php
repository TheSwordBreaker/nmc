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

            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('UserC/View/HomePage') ?>">HomePage</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Homesec2') ?>">HomeSec2</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Homesec3') ?>">HomeSec3</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/HomePage') ?>">HomeSec4</a>
                </div>
                <a data-toggle="dropdown" class="nav-link"href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>Home<b class="caret"></b></p>
                </a>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Destpage') ?>">Destination Page</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Destsec2') ?>">Destination Sec2</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Destpage') ?>">Destination Sec1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Destpage') ?>">Destination Sec1</a>
                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-istanbul"></i>
                    <p>Destination<b class="caret"></b></p>
                </a>
            </li>


            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">Culture Page</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Culsec1') ?>">Culture Sec1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/Culsec2') ?>">Culture Sec 1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">Culture</a>

                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-sun-fog-29"></i>
                    <p>Culture<b class="caret"></b></p>
                </a>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('UserC/View/foodPage') ?>">FoodStuff Sec1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">FoodStuff Sec1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">FoodStuff Sec1</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">FoodStuff Sec1</a>

                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-badge"></i>
                    <p>FoodStuff<b class="caret"></b></p>
                </a>
            </li>


                <!-- <li>
              <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('UserC/View/HomePage') ?>">Home</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/View/Destpage') ?>">Destination</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">Culture</a>
                  <a class="dropdown-item" href="<?= base_url('UserC/View/Users') ?>">Users</a>

                </div>
              <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-single-copy-04" ></i>
                    <p>Home<b class="caret"></b></p>
                </a>
            </li> -->

            <li>
                <a href="<?= base_url('UserC/View/pages') ?>">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>Posts</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('UserC/View/Users') ?>">
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