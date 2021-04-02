<!-- Modal -->
<!-- Modal Tambah User -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-left-warning">
      <div class="modal-header">
        <h5 class="modal-title">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open('user/add'); ?>

        <div class="form-group">
          <label class="my-1">Nama</label>
          <input name="nama_user" class="form-control" required>
          <label class="my-1">Username</label>
          <input name="username" class="form-control" required>
          <label class="my-1">Password</label>
          <input name="password" type="password" class="form-control" required>

          <label class="my-1">Outlet</label>
          <select name="id_outlet" class="form-control">
            <option value="">-</option>

            <?php foreach ($outlet as $o) : ?>

              <option value="<?= $o['id_outlet'] ?>"><?= $o['nama_outlet'] ?></option>

            <?php endforeach; ?>
          </select>

          <label class="my-1">Role</label>
          <select name="role" class="form-control">
            <option value="">-</option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark btn-sm">Tambah</button>
      </div>

      <?php echo form_close(); ?>

    </div>
  </div>
</div>

<!-- Modal Edit User -->
<?php foreach ($user as $u) : ?>

  <div class="modal fade" id="edit<?= $u['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-left-warning">
        <div class="modal-header">
          <h5 class="modal-title">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open('user/edit/' . $u['id_user']); ?>

          <div class="form-group">
            <label class="my-1">Nama</label>
            <input name="nama_user" value="<?= $u['nama_user'] ?>" class="form-control" required>
            <label class="my-1">Username</label>
            <input name="username" value="<?= $u['username'] ?>" class="form-control" required>
            <label class="my-1">Password</label>
            <input name="password" type="password" value="<?= $u['password'] ?>" class="form-control" required>

            <label class="my-1">Outlet</label>
            <select name="id_outlet" class="form-control">
              <option value="">-</option>

              <?php foreach ($outlet as $o) : ?>

                <option value="<?= $o['id_outlet'] ?>"><?= $o['nama_outlet'] ?></option>

              <?php endforeach; ?>
            </select>

            <label class="my-1">Role</label>
            <select name="role" class="form-control">
              <option value="">-</option>
              <option value="admin">Admin</option>
              <option value="kasir">Kasir</option>
              <option value="owner">Owner</option>
            </select>
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

<!-- Modal Hapus User -->
<?php foreach ($user as $u) : ?>

  <div class="modal fade" id="delete<?= $u['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-left-warning">
        <div class="modal-header">
          <h5 class="modal-title">Hapus User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          Apakah anda yakin ingin menghapus User <b><?= $u['username'] ?></b> ?

        </div>
        <div class="modal-footer">
          <a href="user/delete/<?= $u['id_user']; ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>

      </div>
    </div>
  </div>

<?php endforeach; ?>
<!-- /Model -->