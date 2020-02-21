<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="<?= base_url('UserC') ?>" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img <?= base_url('/assets/images/logo-small.png')?>>
            </div>
        </a>
        <a href="<?= base_url('UserC') ?>" class="simple-text logo-normal">
            Nashik Tourism
            <!-- <div class="logo-image-big">
            <img <?= base_url('/assets/images/logo-big.png')?>"
          </div> -->
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav ">
            <li class="<?=(basename($_SERVER['PHP_SELF'])=="UserC")?"active":" ";?> ">
                <a href="<?= base_url('UserC') ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item dropdown <?=((basename($_SERVER['PHP_SELF'])=="infosec1")||(basename($_SERVER['PHP_SELF'])=="infosec2"))?"active":" ";?>">
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="CulturePage")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/infosec1') ?>">infosec1</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Culsec1")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/infosec2') ?>">infosec2</a>
                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-sun-fog-29"></i>
                    <p>Info<b class="caret"></b></p>
                </a>
            </li>





            

            <li class="nav-item dropdown <?=((basename($_SERVER['PHP_SELF'])=="HomePage")||(basename($_SERVER['PHP_SELF'])=="Homesec2")||(basename($_SERVER['PHP_SELF'])=="Homesec3"))?"active":" ";?> ">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item  <?=(basename($_SERVER['PHP_SELF'])=="Homesec1")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/homesec1') ?>">HomePage 1</a>
                    <a class="dropdown-item  <?=(basename($_SERVER['PHP_SELF'])=="Homesec2")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Homesec2') ?>">HomeSec2</a>
                    <a class="dropdown-item  <?=(basename($_SERVER['PHP_SELF'])=="Homesec3")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Homesec3') ?>">HomeSec3</a>
                    <a class="dropdown-item  <?=(basename($_SERVER['PHP_SELF'])=="Homesec4")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Homesec4') ?>">HomeSec4</a>
                </div>
                <a data-toggle="dropdown" class="nav-link"href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>Home<b class="caret"></b></p>
                </a>
            </li>

            <li class="nav-item dropdown <?=((basename($_SERVER['PHP_SELF'])=="Destpage")||(basename($_SERVER['PHP_SELF'])=="Destsec2"))?"active":" ";?> ">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destpage")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destpage') ?>">Destination Page</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec1")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec1') ?>">Destination Sec1</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec2")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec2') ?>">Destination Sec2</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec3")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec3') ?>">Destination Sec3</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec4")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec4') ?>">Destination Sec4</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec5")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec5') ?>">Destination Sec5</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec6")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec6') ?>">Destination Sec6</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destsec7")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destsec7') ?>">Destination Sec7</a>
                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-istanbul"></i>
                    <p>Destination<b class="caret"></b></p>
                </a>
            </li>


            <li class="nav-item dropdown <?=((basename($_SERVER['PHP_SELF'])=="CulturePage")||(basename($_SERVER['PHP_SELF'])=="Culsec1")||(basename($_SERVER['PHP_SELF'])=="Culsec2"))?"active":" ";?>">
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="CulturePage")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/CulturePage') ?>">Culture Page</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Culsec1")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Culsec1') ?>">Culture Sec 1</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Culsec2")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Culsec2') ?>">Culture Sec 2</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Culsec3")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Culsec3') ?>">Culture Sec 3</a>
                    <a class="dropdown-item" href="<?= base_url('UserC/View/CulturePage') ?>">Culture</a>
                </div>
                <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-sun-fog-29"></i>
                    <p>Culture<b class="caret"></b></p>
                </a>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="FoodSec1")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/FoodSec1') ?>">FoodStuff Sec1</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="FoodSec2")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/FoodSec2') ?>">FoodStuff Sec2</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="FoodSec3")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/FoodSec3') ?>">FoodStuff Sec3</a>
                    <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="FoodSec4")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/FoodSec4') ?>">FoodStuff Sec4</a>

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

            <li class="nav-item <?=(basename($_SERVER['PHP_SELF'])=="pages")?"active":" ";?>">
                <a href="<?= base_url('UserC/View/pages') ?>">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>Posts</p>
                </a>
            </li>

           <li class="nav-item <?=(basename($_SERVER['PHP_SELF'])=="Users")?"active":" ";?>">
                <a href="<?= base_url('UserC/View/Users') ?>">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>

            <li class="nav-item <?=(basename($_SERVER['PHP_SELF'])=="Nav bar")?"active":" ";?>">
                <a href="<?= base_url('UserC/View/Navbar') ?>">
                    <i class="nc-icon nc-paper"></i>
                    <p>Nav bar</p>
                </a>
            </li>

            <li class="nav-item <?=(basename($_SERVER['PHP_SELF'])=="Contact")?"active":" ";?>">
                <a href="<?= base_url('UserC/View/Contact') ?>">
                    <i class="nc-icon nc-email-85"></i>
                    <p>Contact</p>
                </a>
            </li>

            <li class="nav-item <?=(basename($_SERVER['PHP_SELF'])=="Feedback")?"active":" ";?>">
                <a href="<?= base_url('UserC/View/Feedback') ?>">
                    <i class="nc-icon nc-globe-2"></i>
                    <p>Feedback</p>
                </a>
            </li>



            <li class="nav-item dropdown <?=((basename($_SERVER['PHP_SELF'])=="Destination")||(basename($_SERVER['PHP_SELF'])=="Culture")||(basename($_SERVER['PHP_SELF'])=="FoodStuff"))?"active":" ";?>">
            <div class="dropdown-menu dropdown-menu-right border" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Destination")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Destination') ?>">Destination</a>
                  <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="Culture")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/Culture') ?>">Culture</a>
                  <a class="dropdown-item <?=(basename($_SERVER['PHP_SELF'])=="FoodStuff")?"font-weight-bold":" ";?>" href="<?= base_url('UserC/View/FoodStuff') ?>">FoodStuff</a>

                </div>
              <a data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
              <i class="nc-icon nc-tile-56"></i>
                    <p>Table List<b class="caret"></b></p>
                </a>
                
            </li>
        </ul>
    </div>
</div>