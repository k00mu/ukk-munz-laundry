<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Munz Laundry | <?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <link href="bsadmin/css/sb-admin-2.min.css" rel="stylesheet">


  <!-- Local CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body class="hold-transition">
  <!-- Site wrapper -->
  <div class="wrapper">

    <div class="d-flex justify-content-center align-items-center fullheight">

      <?php echo form_open('auth/login'); ?>

      <div class="container a-login text-center">

        <h1><b>Munz</b> Laundry</h1>

        <div class="card shadow p-3 mb-5 bg-body border-left-dark rounded">
          <div class="d-flex flex-column card-body justify-content-center align-items-center">

            <!-- Alert -->
            <!-- Jika field kosong -->
            <?php
            $errors = session()->getFlashData('errors');
            if (!empty($errors)) {
            ?>
              <div class="alert alert-danger notype text-center shadow p-3" role="alert">
                <?php foreach ($errors as $key => $value) : ?>
                  <li><?= esc($value) ?></li>
                <?php endforeach; ?>
              </div>
            <?php } ?>

            <!-- Jika gagal login -->
            <?php if (session()->getFlashData('message')) { ?>
              <div class="alert alert-danger text-center shadow p-3" role="alert">
                <?php echo session()->getFlashData('message'); ?>
              </div>
            <?php } ?>

            <!-- Jika logout sukses -->
            <?php if (session()->getFlashData('logout')) { ?>
              <div class="alert alert-success text-center shadow p-3" role="alert">
                <?php echo session()->getFlashData('message'); ?>
              </div>
            <?php } ?>
            <!-- /Alert -->

            <div class="input-group my-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="username" class="form-control a-form-control" value="<?= old('username'); ?>" placeholder="Username" autofocus />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
              </div>
              <input name="password" type="password" class="form-control a-form-control" placeholder="Password" />
            </div>

            <button type="submit" class="btn btn-dark w-100">Login</button>
            <p class="mt-3">Belum punya akun ? <a href="">Daftar</a></p>
          </div>
        </div>
      </div>

      <?php echo form_close(); ?>

    </div>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="bsadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <!-- Theme -->
  <script src="adminlte/dist/js/adminlte.min.js"></script>
  <script src="bsadmin/js/sb-admin-2.min.js"></script>
  <script src="adminlte/dist/js/demo.js"></script>

  <!-- Local Script | Alert timeout-->
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000)
  </script>
</body>

</html>