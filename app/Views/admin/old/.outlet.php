<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

  <button class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm" data-toggle="modal" data-target="#add">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Outlet
  </button>
</div>
<!-- /Page Heading -->

<!-- Alert -->
<!-- Alert sukses -->
<?php if (session()->getFlashData('message')) { ?>
  <div class="alert alert-success text-center shadow p-3" role="alert">
    <?php echo session()->getFlashData('message'); ?>
  </div>
<?php } ?>

<!-- Alert delete -->
<?php if (session()->getFlashData('delete')) { ?>
  <div class="alert alert-danger text-center shadow p-3" role="alert">
    <?php echo session()->getFlashData('delete'); ?>
  </div>
<?php } ?>
<!-- /Alert -->

<!-- Table -->
<div class="card shadow mb-4 border-left-dark">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Daftar Outlet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center" width="15px">ID</th>
            <th>Nama Outlet</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th width="175px"></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($outlet as $o) : ?>
            <tr>
              <td class="text-center"><?= $o['id_outlet'] ?></td>
              <td><?= $o['nama_outlet'] ?></td>
              <td><?= $o['alamat_outlet'] ?></td>
              <td><?= $o['telp_outlet'] ?></td>
              <td class="text-center">
                <a class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#edit<?= $o['id_outlet'] ?>">
                  <span class="icon bg-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                  <span class="text">Edit</span>
                </a>
                <a class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#delete<?= $o['id_outlet'] ?>">
                  <span class="icon bg-white-50">
                    <i class="fas fa-trash"></i>
                  </span>
                  <span class="text">Hapus</span>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /Table -->

<?php $this->endSection(); ?>