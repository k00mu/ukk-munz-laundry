<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?> | Munz Laundry</title>

  <!-- CSS -->
  <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Local CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
  <div id="page-top">

    <?php $this->renderSection('content') ?>

  </div>
  <!-- /#page-top -->

  <!-- BS Admin 2 JavaScript -->
  <script src="/template/vendor/jquery/jquery.min.js"></script>
  <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/template/js/sb-admin-2.min.js"></script>
  <script src="/template/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="/template/js/demo/datatables-demo.js"></script>


  <!-- JQuery JavaScript-->
  <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

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