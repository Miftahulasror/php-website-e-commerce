<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.js"></script>
<!-- Dashboard -->
<script src="/adminlte/js/pages/dashboard.js"></script>

<!-- Data Table -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $('#editModal').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget);
    var id=button.data('id');
    var kodebrg=button.data('kodebrg');
    var nama=button.data('nama');
    var stok=button.data('stok');
    var harga=button.data('harga');
    var gambar=button.data('gambar');

    var modal=$(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #kodebrg').val(kodebrg);
    modal.find('.modal-body #nama').val(nama);
    modal.find('.modal-body #stok').val(stok);
    modal.find('.modal-body #harga').val(harga);
    modal.find('.modal-body #gambar').val(gambar);
  })
</script>

<script>
  $('#deleteModal').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget);
    var id=button.data('id');
    var kodebrg=button.data('kodebrg');
    var nama=button.data('nama');
    var stok=button.data('stok');
    var harga=button.data('harga');
    var gambar=button.data('gambar');

    var modal=$(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #kodebrg').val(kodebrg);
    modal.find('.modal-body #nama').val(nama);
    modal.find('.modal-body #stok').val(stok);
    modal.find('.modal-body #harga').val(harga);
    modal.find('.modal-body #gambar').val(gambar);
  })
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
</script>