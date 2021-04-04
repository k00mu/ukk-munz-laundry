<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class=" container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
      <h1 class="h3 mb-0"><?= $title; ?></h1>
      <a href="/transaksi/tambah" class="d-none d-sm-inline-block btn btn-sm btn-outline-dark shadow-sm">
        <i class="fa fa-plus mr-2"></i>Tambah Transaksi
      </a>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Transaksi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 1%;">#</th>
                <th>Tgl. Transaksi</th>
                <th>Outlet</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Pembayaran</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($transaksi as $t) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td><?= $t['tgl_transaksi']; ?></td>
                  <td><?= $t['nama_outlet']; ?></td>
                  <td><?= $t['nama_member']; ?></td>
                  <td>
                    <div class="row">
                      <div class="col-sm text-left">
                        <span>Rp</span>
                      </div>
                      <div class="col-sm-8 text-right">
                        <?= number_format('1000', 2, ',', '.') ?>
                      </div>
                    </div>
                  </td>
                  <td><?= ucwords($t['konfirmasi']); ?></td>
                  <td><?= ucwords($t['status']); ?></td>
                  <td class="project-actions text-center">
                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit">
                      <i class="fas fa-clipboard mr-1"></i>Detail
                    </a>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

</section>

<?php $this->endSection(); ?>