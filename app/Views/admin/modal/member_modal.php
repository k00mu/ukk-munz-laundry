<!-- Modal -->
<!-- Modal Tambah member -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open('member/add'); ?>

        <div class="form-group">
          <label class="my-1">Nama</label>
          <input name="nama_member" class="form-control" required>
          <label class="my-1">Alamat</label>
          <input name="alamat_member" class="form-control" required>

          <label class="my-1">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control">
            <option value="">-</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
          </select>

          <label class="my-1">Telepon</label>
          <input name="telp_member" class="form-control" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
      </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>

<!-- Modal Edit member -->
<?php foreach ($member as $m) : ?>

  <div class="modal fade" id="edit<?= $m['id_member'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open('member/edit/' . $m['id_member']); ?>

          <div class="form-group">
            <label class="my-1">Nama</label>
            <input name="nama_member" value="<?= $m['nama_member'] ?>" class="form-control" required>
            <label class="my-1">Alamat</label>
            <input name="alamat_member" value="<?= $m['alamat_member'] ?>" class="form-control" required>

            <label class="my-1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
              <option value="<?= $m['jenis_kelamin'] ?>"><?= ucwords($m['jenis_kelamin']) ?></option>
              <option value="">---------------------------------------------------------------------------------------</option>
              <option value="laki-laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>

            <label class="my-1">Telepon</label>
            <input name="telp_member" value="<?= $m['telp_member'] ?>" class="form-control" required>
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

<!-- Modal Hapus member -->
<?php foreach ($member as $m) : ?>

  <div class="modal fade" id="delete<?= $m['id_member'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          Apakah anda yakin ingin menghapus member di <b><?= $m['alamat_member'] ?></b> ?

        </div>
        <div class="modal-footer">
          <a href="member/delete/<?= $m['id_member']; ?>" class="btn btn-sm btn-outline-danger">Hapus</a>
        </div>

      </div>
    </div>
  </div>

<?php endforeach; ?>
<!-- /Model -->