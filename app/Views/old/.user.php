<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

  <button class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm" data-toggle="modal" data-target="#add">
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Akun
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
    <h6 class="m-0 font-weight-bold text-dark">Daftar Akun</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center" width="15px">ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Outlet</th>
            <th>Role</th>
            <th width="175px"></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($user as $u) : ?>
            <tr>
              <td class="text-center"><?= $u['id_user'] ?></td>
              <td><?= $u['nama_user'] ?></td>
              <td><?= $u['username'] ?></td>
              <td><?= $u['nama_outlet'] ?></td>
              <td><?= $u['role'] ?></td>
              <td class="text-center">
                <a class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#edit<?= $u['id_user'] ?>">
                  <span class="icon bg-white-50">
                    <i class="fas fa-edit"></i>
                  </span>
                  <span class="text">Edit</span>
                </a>
                <a class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#delete<?= $u['id_user'] ?>">
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

<!-- Modal -->
<!-- Modal Tambah User -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border-left-warning">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
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

            <?php foreach ($outlet as $key => $value) : ?>

              <option value="<?= $value['id_outlet'] ?>"><?= $value['nama_outlet'] ?></option>

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
          <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Hapus User</h5>
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

<?php $this->endSection(); ?>