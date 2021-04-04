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

  <!-- Local Script -->
  <script>
    const base_url = '<?= base_url() ?>'


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

    function getSubTotal() {
      let total_biaya = 0;
      $(document).find('.total_harga').each((index, element) => {
        total_biaya += Number($(element).val());
      });

      return total_biaya;
    }

    $('.btn-tambah-det').click((e) => {
      e.preventDefault();
      id_paket = $('.id_paket').val();
      qty = $('.qty').val();

      $.get(base_url + '/paket/' + id_paket, (response) => {
        const data = JSON.parse(response);
        const find = $(document).find('tr[data-id="' + data.id_paket + '"]');

        if (find.length == 0) {
          $('.paket').append(
            `
          <tr data-id="${data.id_paket}">
            <input type="hidden" name="id_paket[]" value="${data.id_paket}">
            <td>${data.nama_paket}</td>
            <td>${data.harga_paket}</td>
            <td>
              <input readonly class="form-control" name="qty[]" value="${qty}">
            </td>
            <td>
              <input readonly class="form-control total_harga" name="total_harga[]" value="${data.harga_paket * qty}">
            </td>
            <td>
              <div class="text-center">
                <a class="btn btn-danger btn-sm btn-hapus">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </td>
          </tr>
          `
          );
        }

        $('.total_biaya').val(getSubTotal());
      });
    });

    $(document).on('click', '.btn-hapus', function() {
      $(this).closest('tr').remove();
      $('.total_bayar').val(getSubTotal());
    });

    $('.biaya_tambahan').keyup(() => {
      biaya_tambahan = $('.biaya_tambahan').val();
      total_biaya = getSubTotal();

      $('.total_biaya').val(Number(total_biaya) + (Number(biaya_tambahan)))
    });

    $('.pajak').keyup(() => {
      pajak = $('.pajak').val();
      total_biaya = getSubTotal();
      ppajak = (Number(pajak) / 100) * Number(total_biaya)

      $('.total_biaya').val(Number(total_biaya) + Number(ppajak))
    });

    $('.diskon').keyup(() => {
      diskon = $('.diskon').val();
      pajak = $('.pajak').val();
      total_biaya = getSubTotal();

      pdiskon = (Number(diskon) / 100) * Number(total_biaya)

      $('.total_biaya').val(Number(total_biaya) + Number(ppajak) - Number(pdiskon))
    });

    // $("[name='biaya_tambahan']").change((e) => {
    //   e.preventDefault();
    //   let curPrice = $("[name='biaya_paket']").val();
    //   let addPrice = $("[name='biaya_tambahan']").val();

    //   $("[name='total_biaya']").val(Number(curPrice) + Number(addPrice));
    // });

    // $("[name='diskon']").change((e) => {
    //   e.preventDefault();
    //   let total = $("[name='total_biaya']").val();
    //   let diskon = $("[name='diskon']").val();

    //   $("[name='total_biaya']").val((Number(total) - (Number(total) * (Number(diskon) / 100))).toFixed(2));
    // });

    // $("[name='pajak']").change((e) => {
    //   e.preventDefault();
    //   let total = $("[name='total_biaya']").val();
    //   let pajak = $("[name='pajak']").val();

    //   $("[name='total_biaya']").val((Number(total) + (Number(total) * (Number(pajak) / 100))).toFixed(2));
    // });
  </script>
</body>

</html>