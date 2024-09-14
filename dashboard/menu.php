<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <img class="mt-4 ms-4" src="../img/Logo/Esai Studio logo black.png" style="height: 60px;">
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard selected"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Main COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./booking.php" aria-expanded="false">
                <span>
                  <i class="ti ti-camera"></i>
                </span>
                <span class="hide-menu">Booking</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./inquiry.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Inquiry</span>
              </a>
            </li>
            <hr>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./newpackage.php" aria-expanded="false">
                <span>
                  <i class="ti ti-new-section"></i>
                </span>
                <span class="hide-menu">New Package</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./package.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-dollar"></i>
                </span>
                <span class="hide-menu">Package Management</span>
              </a>
            </li>
            <hr>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="./gallery.php" aria-expanded="false">
                <span>
                  <i class="ti ti-photo"></i>
                </span>
                <span class="hide-menu">Gallery Management</span>
              </a>
            </li>
            <hr>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./signup.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">New Admin</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./admin.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-check"></i>
                </span>
                <span class="hide-menu">Admin Management</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

    <div class="body-wrapper ">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <form action="../includes/logout.inc.php" method="post">  
                <button class="btn btn-danger">Logout</button>
              </form>
            </ul>
          </div>
        </nav>
      </header>