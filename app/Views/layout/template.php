<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Munz Laundry | <?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="\adminlte/plugins/fontawesome-free/css/all.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="\adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="\adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="\adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="\adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Local CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="sidebar-mini sidebar-mini-collapsed sidebar-collapse layout-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?= $this->include('layout/navside'); ?>
    <div class="content-wrapper">
      <div class="container-fluid">


        <?php $this->renderSection('content'); ?>

      </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer text-center">
      <strong>Copyright &copy; 2021 Munz Laundry.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="\adminlte/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="\adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="\adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <!-- Theme -->
  <script src="\adminlte/dist/js/adminlte.min.js"></script>
  <script src="\adminlte/dist/js/demo.js"></script>
  <script src="\adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="\adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="\adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="\adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="\adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="\adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="\adminlte/plugins/jszip/jszip.min.js"></script>
  <script src="\adminlte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="\adminlte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="\adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="\adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="\adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="\adminlte/plugins/select2/js/select2.full.min.js"></script>
  <script src="\adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <script src="\adminlte/plugins/moment/moment.min.js"></script>
  <script src="\adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="\adminlte/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="\adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

  <!-- Local Script | Alert timeout-->
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    $i = 2;
    $(document).ready(() => {
      $("#tambahPaket").click(() => {
        $("#paket").append(
          `
          <tr>
            <td>
              ${
                $i++
              }
            </td>
            <td>
              <select name="nama_paket" class="form-control form-control-sm" required>
                <option value="">-</option>
              </select>
            </td>
            <td>
              <input class="form-control form-control-sm" required>
            </td>
            <td>
              <input class="form-control form-control-sm bg-light" disabled>
            </td>
            <td>
              <input class="form-control form-control-sm bg-light" disabled>
            </td>
            <td>
              <div class="text-center">
                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </td>
          </tr>
          `
        )
      })

      $(".item-paket").each(function() {
        let d;
        $(this).click(function() {
          $.get("../paket/" + $(this).val(), function(data, status) {
            d = JSON.parse(data);
            // alert("Data: " + d.harga_paket + "\nStatus: " + status);
            alert(d.harga_paket);
          });
        });

      });
    });
  </script>
</body>

</html>