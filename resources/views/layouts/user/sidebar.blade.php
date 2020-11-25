<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="">

  </div>
  
  <a href="/" class="brand-link">
    <img src="{{ asset('adminlte/dist/img/logoDinas.png')}}"
         alt="AdminLTE Logo"
         class="brand-image img-circle"
        ">
    <span class="brand-text font-weight-light">DINAS PENDIDIKAN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="{{ asset('adminlte/dist/img/profile.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="/pengajuan" class="nav-link">
            <i class="nav-icon fas fa-folder-plus"></i>
            <p>
              Tambah Pengajuan
            </p>
          </a>
        </li>     
        <li class="nav-item has-treeview">
          <a href="/data-tables" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
            </p>
          </a>
        </li>
        <li>
           <!-- /.info-box -->
           <div class="info-box bg-light">
            

            <div class="info-box-content">
              <span class="info-box-text">Status pengajuan</span>
              <span class="info-box-number badge badge-success">Diterima</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>