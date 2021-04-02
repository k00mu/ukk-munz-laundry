<!-- Modal -->
<!-- Modal Tambah Outlet -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-left-warning">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Outlet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open('outlet/add'); ?>

        <div class="form-group">
          <label class="my-1">Nama Outlet</label>
          <input name="nama_outlet" class="form-control" required>
          <label class="my-1">Alamat</label>
          <input name="alamat_outlet" class="form-control" required>
          <label class="my-1">Telepon</label>
          <input name="telp_outlet" class="form-control" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
      </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>

<!-- Modal Edit outlet -->
<?php foreach ($outlet as $o) : ?>

  <div class="modal fade" id="edit<?= $o['id_outlet'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-left-warning">
        <div class="modal-header">
          <h5 class="modal-title">Edit Outlet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open('outlet/edit/' . $o['id_outlet']); ?>

          <div class="form-group">
            <label class="my-1">Nama</label>
            <input name="nama_outlet" value="<?= $o['nama_outlet'] ?>" class="form-control" required>
            <label class="my-1">Alamat</label>
            <input name="alamat_outlet" value="<?= $o['alamat_outlet'] ?>" class="form-control" required>
            <label class="my-1">Telepon</label>
            <input name="telp_outlet" value="<?= $o['telp_outlet'] ?>" class="form-control" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
        </div>

        <?php echo form_close(); ?>

      </div>
    </div>
  </div>

<?php endforeach; ?>

<!-- Modal Hapus Outlet -->
<?php foreach ($outlet as $o) : ?>

  <div class="modal fade" id="delete<?= $o['id_outlet'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-left-warning">
        <div class="modal-header">
          <h5 class="modal-title">Hapus outlet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          Apakah anda yakin ingin menghapus outlet di <b><?= $o['alamat_outlet'] ?></b> ?

        </div>
        <div class="modal-footer">
          <a href="outlet/delete/<?= $o['id_outlet']; ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>

      </div>
    </div>
  </div>

<?php endforeach; ?>
<!-- /Model -->