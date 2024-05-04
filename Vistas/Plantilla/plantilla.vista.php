<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bolsa de Empleo UGC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/fontawesome-free/css/all.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="./assets/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="./assets/temas/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/jqvmap/jqvmap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/temas/adminlte/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.css">
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.css">

  <!-- SweetAlert 2 -->
  <link rel="stylesheet" href="./assets/js/sweetalert2/sweetalert2.min.css">

  <!-- js para los cuadros de mensajes -->
  <script src="./assets/js/sweetalert2/sweetalert2.all.min.js"></script>
</head>
<?php
include "encabezado.vista.php";

include "menu.vista.php";

/**Validar que ruta se esta pasando por la url para abrir la paginas */

$rutas = new RutasControlador();
$rutas->Rutas();



?>

<body class="hold-transition sidebar-mini">

  <!-- Site wrapper -->

  <!--  /site wrapper fin --->

  <!-- jQuery -->
  <script src="./assets/temas/adminlte/plugins/jquery/jquery.js"></script>
  <!-- jQuery UI 1.11.4 -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <!-- <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- jQuery UI -->
  <script src="./assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <!-- <script src="../dist/js/adminlte.min.js"></script> -->
  <script src="/assets/temas/adminlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../dist/js/demo.js"></script> -->
  <script src="/assets/temas/adminlte/dist/js/demo.js"></script>
  <!-- Page specific script -->


  <!-- fullCalendar 2.2.5 -->
  <script src="./assets/plugins/moment/moment.min.js"></script>
  <script src="./assets/plugins/fullcalendar/main.js"></script>
  <script src="./assets/js/calendario.js"></script>

  <script src="./assets/temas/adminlte/plugins/jquery-ui/jquery-ui.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <!-- <script src="./assets/temas/adminlte/plugins/bootstrap/js/bootstrap.bundle.js"></script> -->
  <!-- AdminLTE App -->
  <script src="./assets/temas/adminlte/dist/js/adminlte.js"></script>
  <!-- ChartJS -->
  <script src="./assets/plugins/chart.js/Chart.js"></script>
  <script src="./assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./assets/temas/adminlte/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./assets/temas/adminlte/plugins/jqvmap/jquery.vmap.js"></script>
  <script src="./assets/temas/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <!-- <script src="./assets/temas/adminlte/plugins/jquery-knob/jquery.knob.js"></script> -->
  <!-- daterangepicker -->
  <!-- <script src="./assets/temas/adminlte/plugins/moment/moment.js"></script> -->
  <script src="./assets/temas/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <script src="./assets/temas/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js"></script> -->
  <!-- Summernote -->
  <script src="./assets/temas/adminlte/plugins/summernote/summernote-bs4.js"></script>
  <!-- overlayScrollbars -->
  <script src="./assets/temas/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/temas/adminlte/dist/js/adminlte.js"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="./assets/temas/adminlte/dist/js/pages/dashboard.js"></script> -->

  <!-- DataTables  & Plugins -->
  <script src="./assets/temas/adminlte/plugins/datatables/jquery.dataTables.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-responsive/js/dataTables.responsive.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-buttons/js/dataTables.buttons.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.js"></script>
  <script src="./assets/temas/adminlte/plugins/jszip/jszip.js"></script>
  <script src="./assets/temas/adminlte/plugins/pdfmake/pdfmake.js"></script>
  <script src="./assets/temas/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-buttons/js/buttons.html5.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-buttons/js/buttons.print.js"></script>
  <script src="./assets/temas/adminlte/plugins/datatables-buttons/js/buttons.colVis.js"></script>

  <script>
    $(function () {
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
  </script>


</body>

<?php
include "piepagina.vista.php";

?>

</html>