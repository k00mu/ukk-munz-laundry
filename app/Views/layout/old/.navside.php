<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-text mx-3">Munz Laundry</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Jika login sebagai Admin -->
  <?php if (session()->get('role') == 'admin') { ?>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mb-2">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Outlet -->
    <li class="nav-item">
      <a class="nav-link" href="/outlet">
        <i class="fas fa-fw fa-cog"></i>
        <span>Outlet</span>
      </a>
    </li>

    <!-- Nav Item - Paket Cucian -->
    <li class="nav-item">
      <a class="nav-link" href="/paket">
        <i class="fas fa-fw fa-cog"></i>
        <span>Paket Cucian</span>
      </a>
    </li>

    <!-- Nav Item - Pelanggan -->
    <li class="nav-item">
      <a class="nav-link" href="/member">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pelanggan</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mb-2">

    <!-- Heading -->
    <div class="sidebar-heading">
      Admin
    </div>

    <!-- Nav Item - User Configuration -->
    <li class="nav-item">
      <a class="nav-link" href="/user">
        <i class="fas fa-fw fa-cog"></i>
        <span>Akun</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mb-2">

    <!-- Heading -->
    <div class="sidebar-heading">
      Operation
    </div>

    <!-- Nav Item - Transaksi -->
    <li class="nav-item">
      <a class="nav-link" href="/transaksi">
        <i class="fas fa-fw fa-cog"></i>
        <span>Transaksi</span>
      </a>
    </li>

  <?php } elseif (session()->get('role') == 'kasir') { ?>
    <!-- Jika login sebagai Owner -->
    <div></div>
  <?php } elseif (session()->get('role' == 'owner')) {  ?>
    <!-- Jika login sebagai cashier -->
    <div></div>
  <?php } ?>

</ul>
<!-- /Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <div class="text-center d-none d-md-inline mt-3">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <?php // Mencari tahu user sudah login atau belum
        if (session()->get('username') == "") {
        ?>

          <!-- Nav Item - Login (Jika belum login) -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth') ?>" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-sign-in-alt mr-2"></i>
              Login
            </a>
          </li>

        <?php } else { ?>

          <!-- Divider -->
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600"><?= session()->get('nama_user') ?></span>
              <img class="img-profile rounded-circle" src="<?= base_url(); ?>/template/img/undraw_profile_2.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>

        <?php } ?>
      </ul>

    </nav>
    <!-- /Topbar -->