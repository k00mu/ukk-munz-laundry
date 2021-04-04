<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class=" container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
      <h1 class="h3 mb-0">Tambah <?= $title; ?></h1>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <!-- form start -->
  <?php form_open('transaksi/add') ?>
  <div class="row">
    <div class="col-sm-8">
      <div class="row">



        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              Info Pesanan
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Invoice</label>
                <div class="col-sm-10">
                  <input name="kode_invoice" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tgl Selesai</label>
                <div class="input-group col-sm-10">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input name="batas_waktu" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              Paket Pesanan
              <div class="card-tools">
                <a class="d-none d-sm-inline-block btn btn-sm btn-outline-dark shadow-sm" id="tambahPaket">
                  <i class="fa fa-plus mr-2"></i>Tambah Paket
                </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 1%;">#</th>
                    <th style="width: 50%">Nama Paket</th>
                    <th style="width: 5%">Qty</th>
                    <th>@</th>
                    <th>Harga</th>
                    <th style="max-width: 5%"></th>
                  </tr>
                </thead>
                <tbody id="paket">
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      <select name="id_paket" class="item-paket form-control form-control-sm" required>
                        <option value="">-</option>
                        <?php foreach ($paket as $p) : ?>
                          <option value="<?= $p['id_paket']; ?>"><?= $p['nama_paket']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </td>
                    <td>
                      <input name="qty" class="form-control form-control-sm" required>
                    </td>
                    <td id="price">
                      <input id="priceInput" name="harga_paket" class="form-control form-control-sm bg-light">
                    </td>
                    <td>
                      <input value="" class="form-control form-control-sm bg-light" disabled>
                    </td>
                    <td>
                      <div class="text-center">
                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                          <i class="fas fa-trash"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>


          </div>
        </div>
      </div>
    </div>



    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">
          Info Pesanan
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="card-body">

          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Biaya Paket</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control bg-light" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Biaya Tambahan</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Diskon</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Pajak</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Total</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control bg-light" disabled>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-outline-dark float-right">Simpan</button>
        </div>

      </div>
    </div>
  </div>

  </div>
  </div>
  <!-- /.card-body -->

  <?php form_close(); ?>
</section>

<?php $this->endSection(); ?>