<!-- Modal -->
<!-- Modal Tambah Paket -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Paket Cucian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open('paket/add'); ?>

        <div class="form-group">

          <label class="my-1">Nama Outlet</label>
          <select name="id_outlet" class="form-control">
            <option value="">-</option>

            <?php foreach ($outlet as $o) : ?>

              <option value="<?= $o['id_outlet'] ?>"><?= $o['nama_outlet'] ?></option>

            <?php endforeach; ?>

          </select>

          <label class="my-1">Jenis Paket</label>
          <select name="jenis_paket" class="form-control">
            <option value="">-</option>
            <option value="satuan">Satuan</option>
            <option value="kiloan">Kiloan</option>
          </select>
          <label class="my-1">Nama Paket</label>
          <input name="nama_paket" class="form-control" required>
          <label class="my-1">Harga</label>
          <input name="harga_paket" class="form-control" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
      </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>

<!-- Modal Edit paket -->
<?php foreach ($paket->paketData() as $p) : ?>

  <div class="modal fade" id="edit<?= $p['id_paket'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Paket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open('paket/edit/' . $p['id_paket']); ?>

          <div class="form-group">
            <label class="my-1">Nama Outlet</label>
            <select name="id_outlet" class="form-control">
              <option value="<?= $p['id_outlet'] ?>"><?= $p['nama_outlet'] ?></option>
              <option value="">---------------------------------------------------------------------------------------</option>
              <?php foreach ($outlet as $o) : ?>

                <option value="<?= $o['id_outlet'] ?>"><?= $o['nama_outlet'] ?></option>

              <?php endforeach; ?>
            </select>
            <label class="my-1">Jenis Paket</label>
            <select name="jenis_paket" class="form-control">
              <option value="<?= $p['jenis_paket'] ?>"><?= ucwords($p['jenis_paket']) ?></option>
              <option value="">---------------------------------------------------------------------------------------</option>
              <option value="satuan">Satuan</option>
              <option value="kiloan">Kiloan</option>
            </select>
            <label class="my-1">Nama Paket</label>
            <input name="nama_paket" value="<?= $p['nama_paket'] ?>" class="form-control" required>
            <label class="my-1">Harga</label>
            <input name="harga_paket" value="<?= $p['harga_paket'] ?>" class="form-control" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-outline-dark">Simpan</button>
        </div>

        <?php echo form_close(); ?>

      </div>
    </div>
  </div>

<?php endforeach; ?>

<!-- Modal Hapus paket -->
<?php foreach ($paket->paketData() as $p) : ?>

  <div class="modal fade" id="delete<?= $p['id_paket'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Paket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          Apakah anda yakin ingin menghapus paket <b><?= $p['nama_paket'] ?></b> ?

        </div>
        <div class="modal-footer">
          <a href="paket/delete/<?= $p['id_paket']; ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
        </div>

      </div>
    </div>
  </div>

<?php endforeach; ?>
<!-- /Model -->