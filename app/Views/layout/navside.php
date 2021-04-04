<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <?php if (!session()->get('username') == "") { ?>

      <!-- User Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown">
          <span class="mr-2 d-none d-lg-inline text-gray-600"><?= session()->get('nama_user'); ?> (<?= session()->get('role') ?>)</span>
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm-right text-center">
          <a href="/auth/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>
            Keluar
          </a>
        </div>
      </li>

    <?php } else { ?>

      <li class="nav-item">
        <a class="nav-link" href="/auth" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-sign-in-alt"></i>
          Login
        </a>
      </li>

    <?php } ?>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <div class="brand-image" style="opacity: .8">
      <i class="fas fa-tshirt mt-2 mx-1"></i>
    </div>
    <span class="brand-text font-weight-light">Munz Laundry</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/transaksi" class="nav-link">
            <i class="nav-icon far fa-handshake"></i>
            <p class="text">Transaksi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/outlet" class="nav-link">
            <i class="nav-icon fas fa-store-alt"></i>
            <p class="text">Outlet</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/paket" class="nav-link">
            <i class="nav-icon fas fa-socks"></i>
            <p class="text">Paket Cucian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/member" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p class="text">Member</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p class="text">Akun</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/laporan" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
            <p class="text">Laporan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/laporan" class="nav-link">
            <i class="nav-icon fa fa-history"></i>
            <p class="text">Riwayat</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>