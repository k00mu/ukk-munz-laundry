<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>

<div class="row">
  <div class="col-sm-12 text-center pt-4">

    <?php // Mencari tahu user sudah login atau belum
    if (session()->get('username') == "") {
    ?>

      <h1>Selamat Datang Di</h1>
      <h1><b>Munz</b> Laundry!</h1>

    <?php } else { ?>

      <h1>Selamat Datang di <b>Munz</b> Laundry,</h1>
      <h1><?= session()->get('nama_user') ?></h1>

    <?php } ?>

  </div>
  <div class="col-sm-12 text-center">
    <img src="/picture/home-laundry.png" alt="" class="img-responsive pad mw-100" width="500px">
  </div>

</div>

<?php $this->endSection(); ?>