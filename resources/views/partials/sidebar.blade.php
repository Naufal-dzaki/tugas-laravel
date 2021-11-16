<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Naufal Dzaki</a>
      </div>
    </div>

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
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/" class="nav-link {{  ($title == "Light Dashboard") ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard Light mode</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard2" class="nav-link {{  ($title == "Dark Dashboard") ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard dark mode</p>
              </a>
            </li>

        <li class="nav-header">EXAMPLES</li>

        <li class="nav-item">
          <a href="/produk" class="nav-link {{  ($title == "produk") ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/posts" class="nav-link {{  ($title == "post") ? 'active' : '' }}">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Post
            </p>
          </a>
        </li>

        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>