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
  <?php echo form_open('transaksi/tambahTransaksi') ?>
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

            <input type="hidden" name="id_outlet">
            <input type="hidden" name="id_user">

            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Invoice</label>
                <div class="col-sm-10">
                  <input name="kode_invoice" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Customer</label>
                <div class="col-sm-10">
                  <select name="id_member" class="item-paket form-control form-control-sm" required>
                    <option value="">-</option>
                    <?php foreach ($member as $m) : ?>
                      <option value="<?= $m['id_member']; ?>"><?= $m['nama_member']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tgl Selesai</label>
                <div class="input-group col-sm-10">
                  <input name="batas_waktu" class="form-control" type="datetime-local">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="input-group col-sm-10">
                  <select name="status" class="item-paket form-control form-control-sm" required>
                    <option value="">-</option>
                    <option value="baru">Baru</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                    <option value="diterima">Diterima</option>

                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pembayaran</label>
                <div class="input-group col-sm-10">
                  <select name="konfirmasi" class="item-paket form-control form-control-sm" required>
                    <option value="">-</option>
                    <option value="lunas">Lunas</option>
                    <option value="belum_lunas">Belum Lunas</option>
                  </select>
                </div>
              </div>

            </div>
          </div>
        </div>



        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <label class="col-sm-1 text-right">Paket</label>
                <div class="input-group col-sm-5">
                  <select name="id_paket" class="item-paket form-control form-control-sm id_paket" required>
                    <option value="">-</option>
                    <?php foreach ($paket as $p) : ?>
                      <option value="<?= $p['id_paket']; ?>"><?= $p['nama_paket']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <label class="col-sm-1 text-right">Qty</label>
                <div class="input-group col-sm-2">
                  <input name="qty" class="form-control form-control-sm qty" required>
                </div>
                <div class="card-tools text-right col-sm-3">
                  <a class="btn-tambah-det d-none d-sm-inline-block btn btn-sm btn-outline-dark shadow-sm">
                    <i class="fa fa-plus mr-2"></i>Tambah Paket
                  </a>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="card-body">
              <table class="table table-striped tabel-paket">
                <thead>
                  <tr>
                    <th>Nama Paket</th>
                    <th>@</th>
                    <th style="width: 10%">Qty</th>
                    <th style="width: 20%;">Harga</th>
                    <th style="max-width: 5%"></th>
                  </tr>
                </thead>
                <tbody class="paket">

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
              <label class="form-label">Biaya Tambahan</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input name="biaya_tambahan" class="form-control biaya_tambahan">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Pajak</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <input name="pajak" class="form-control pajak">
                <div class="input-group-append">
                  <span class="input-group-text">%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-form-label text-right">
              <label class="form-label">Diskon</label>
            </div>
            <div class="col-sm-6">
              <div class="input-group">
                <input name="diskon" class="form-control diskon">
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
                <input name="total_biaya" type="text" class="form-control bg-light total_biaya" readonly>
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
  <?php echo form_close(); ?>

  </div>
  </div>
  <!-- /.card-body -->
</section>

<?php $this->endSection(); ?>