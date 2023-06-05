

<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <?php if(isset($_SESSION['login'])== "true" ) { ?>
        <div class="info">
          <h5><a href="#" class="d-block"><?php echo $_SESSION['fullName'];?></a></h5>
        </div>
      </div>
      
      <?php }else{?>

        <div class="info">
          <h5><a href="#" class="d-block">Guest User</a></h5>
        </div>
      </div>
      <?php }?>
      
      
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <?php if(isset($_SESSION['login'])== "true" ) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Prisoners
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php#prisoner_info" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prisoner Information</p>
                </a>
              </li>

              <?php if(isset($_SESSION['login'])== "true"  and ($_SESSION["yetki"]) == "1") { ?>
              <li class="nav-item">
                <a href="p_infoedit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Prisoner Information</p>
                </a>
              </li>
              <?php }?>

            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              User Operations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <?php if(isset($_SESSION['login'])== "true"  and ($_SESSION["yetki"]) == "2") { ?>
              <li class="nav-item">
                <a href="send_dm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Message to Admin</p>
                </a>
              </li>
              <?php }?>


              <?php if(isset($_SESSION['login'])== "true"  and ($_SESSION["yetki"]) == "1") { ?>
              <li class="nav-item">
                <a href="send_dm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Messages</p>
                </a>
              </li>
              <?php }?>
              <?php if(isset($_SESSION['login'])== "true"  and ($_SESSION["yetki"]) == "1") { ?>
              <li class="nav-item">
                <a href="user_infoedit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit user information</p>
                </a>
              </li>
              <?php }?>
              <li class="nav-item">
                <a href="pass_change.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>

            </ul>


          <hr>
          </li>
          <div>
          <?php }?>
          
          <?php if(isset($_SESSION['login'])!= "true") { ?>
          <li class="nav-item">
            <a href="login_page.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Login</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="register_page.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Register</p>
            </a>
          </li>

          <?php } else{ ?>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">logout</p>
            </a>
          </li>
          <?php }  ?>


          <li class="nav-item">
            <a href="index.php#contact" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>