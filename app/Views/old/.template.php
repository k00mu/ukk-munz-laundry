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

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?= $this->include('layout/navside'); ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <?php $this->renderSection('content'); ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Munz Laundry 2021</span>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

  </div>
  <!-- /Content Wrapper -->

  </div>
  <!-- /Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

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