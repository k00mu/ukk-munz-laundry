<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class=" container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
      <h1 class="h3 mb-0"><?= $title; ?></h1>
      <a class="d-none d-sm-inline-block btn btn-sm btn-outline-dark shadow-sm" data-toggle="modal" data-target="#add">
        <i class="fa fa-plus mr-2"></i>Tambah Paket Cucian
      </a>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">

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

  <div class="row">

    <?php
    foreach ($outlet as $o) :
    ?>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?= $o['nama_outlet']; ?></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Jenis Paket</th>
                  <th>Nama Paket</th>
                  <th>Harga</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($paket->paketDataPerOutlet($o['id_outlet']) as $p) : ?>
                  <tr>
                    <td><?= ucwords($p['jenis_paket']) ?></td>
                    <td><?= $p['nama_paket'] ?></td>
                    <td>
                      <div class="row">

                        <div class="col-sm text-left">
                          <span>Rp</span>
                        </div>
                        <div class="col-sm-8 text-right">
                          <?= number_format($p['harga_paket'], 2, ',', '.') ?>
                        </div>
                      </div>
                    </td>

                    <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?= $p['id_paket'] ?>">
                        <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $p['id_paket'] ?>">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

    <?php endforeach; ?>

  </div>
</section>

<?= $this->include('admin/modal/paket_modal'); ?>

<?php $this->endSection(); ?>