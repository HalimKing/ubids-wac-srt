 <!-- Main Sidebar Container -->
 <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" >
      <img src="dist/img/ubids-logo.png" alt="AdminLTE Logo" class="brand-image img-circle ">
      <span class="brand-text font-weight-light">WAC-SRT</span>
    </a>

   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link <?php if($page == "dashboard"){echo "active";} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($page == "menu"){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Menus</p>
                </a>
              </li>
              
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="background.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Background</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="resources.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resources</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="<?php if($page == "addprogrammes"){echo "active";} ?> nav-link">
              <i class=" nav-icon fas fa-chart-pie"></i>
              <p>
                Programmes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./manageProgrammes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Programme</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All AProgrammes</p>
                </a>
              </li> -->
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($page == "people"){echo "active";} ?>">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                People
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="managePeople.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management People</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link <?php if($page == "projects"){echo "active";} ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="projectDocumentation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Documentation</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($page == "news/events"){echo "active";} ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                News & Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="news.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="events.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($page == "settings"){echo "active";} ?>">
              <i class="nav-icon fas fa-gear"></i>
              <p>
              Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              
            </ul>
          </li>
         
         
         
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
