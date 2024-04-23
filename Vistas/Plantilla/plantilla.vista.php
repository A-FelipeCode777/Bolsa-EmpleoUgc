<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bolsa de Empleo UGC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/fontawesome-free/css/all.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="./assets/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./assets/temas/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css">
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
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="./assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
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
  <script src="./assets/temas/adminlte/plugins/bootstrap/js/bootstrap.bundle.js"></script>
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
  <script src="./assets/temas/adminlte/plugins/jquery-knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="./assets/temas/adminlte/plugins/moment/moment.js"></script>
  <script src="./assets/temas/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./assets/temas/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js"></script>
  <!-- Summernote -->
  <script src="./assets/temas/adminlte/plugins/summernote/summernote-bs4.js"></script>
  <!-- overlayScrollbars -->
  <script src="./assets/temas/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/temas/adminlte/dist/js/adminlte.js"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="./assets/temas/adminlte/dist/js/pages/dashboard.js"></script>

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
  </script>



  <script>
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
      labels: [
        'Trabajos Publicados',
        'Candidatos registrados',
        'Empresas Registradas',
        'Total Usuarios registrados',
       
      ],
      datasets: [{
        data: [1865, 11619, 6263, 17876,],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }]
    }
    var donutOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //- BAR CHART -
    //-------------
    var areaChartData = {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
      datasets: [{
          label: 'Candidatos Contratados',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label: 'OF Aplicadas',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive: true,
      maintainAspectRatio: false,
      datasetFill: false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
  </script>




</body>

<?php
include "piepagina.vista.php";

?>

</html>