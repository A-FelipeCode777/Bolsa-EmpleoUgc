<?php
// ruta del controlador
// require_once "./controladores/empresa.controller.php";
require_once "./Controladores/pofertas/pofertas.controller.php"
  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Nueva Oferta</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item">Parámetros</li>
            <li class="breadcrumb-item">Oferta</li>
            <li class="breadcrumb-item active">Nuevo</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <form role="form" method="post">
        <div class="card-body">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header-form">
                    <h3 class="card-title">Oferta</h3>
                  </div>
                  <div class="card-body">
                    <form method="post">
                      <div class="form-group">
                        <label for="inputNombreEmpresa">Nombre Empresa</label>
                        <input type="text" id="inputNombreEmpresa" class="form-control" name="addInputNombreEmpresa"
                          placeholder="Ingrese nombre de empresa" required minlength="6" maxlength="50">
                      </div>
                      <div class="form-group">
                        <label for="inputCorreo">Correo</label>
                        <input type="email" id="inputCorreo" class="form-control" name="addInputCorreo"
                          placeholder="Ingrese correo">
                      </div>
                      <div class="form-group">
                        <label for="inputSector">Sector</label>
                        <input type="text" id="inputSector" class="form-control" name="addInputSector"
                          placeholder="Ingrese el sector requerido" required minlength="6" maxlength="50">
                      </div>
                      <div class="form-group">
                        <label for="inputTelefono">Telefono</label>
                        <input type="number" id="inputTelefono" class="form-control" name="addInputTelefono"
                          placeholder="Ingrese un numero de contacto" required minlength="3" maxlength="50">
                      </div>
                      <div class="form-group">
                        <label for="inputDescripcion">Descripción</label>
                        <input type="search" id="inputDescripcion" class="form-control" name="addInputDescripcion"
                          placeholder="Ingrese una descripcion de la vacante requerida" required minlength="30"
                          maxlength="150">
                      </div>
                      <div class="form-group">
                        <label for="inputDirigida">Dirigida a</label>
                        <select id="inputDirigida" class="form-control" name="addInputDirigida">
                          <option value="Estudiantes">Estudiantes</option>
                          <option value="Prácticas">Prácticas</option>
                          <option value="Profesionales">Profesionales</option>
                          <option value="Con Postgrados">Con Postgrados</option>
                        </select>
                      </div>


                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

            </div>
            <div class="row">
              <div class="col-12 text-right">
                <button type="submit" class="btn btn-success"><i class="fa fa-save nav-icon"></i> Guardar</button>
                <button type="button" class="btn btn-warning" id="cancelarBtn" onclick="limpiarFormulario()">
                  <i class="fa fa-power-off nav-icon"></i> Cancelar
                </button>
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.card-body -->
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
/**
 * Llamar a la función del controlador: Crear 
 */
$addPofertaModel = PofertaController::create();
?>

<script>
  function limpiarFormulario() {
    document.getElementById("inputNombreEmpresa").value = ""; // Limpiar campo de nombre empresa
    document.getElementById("inputCorreo").value = ""; // Limpiar campo de correo
    document.getElementById("inputSector").value = ""; // Limpiar campo de sector
    document.getElementById("inputTelefono").value = ""; // Limpiar campo de teléfono
    document.getElementById("inputDescripcion").value = ""; // Limpiar campo de descripción
    document.getElementById("inputDirigida").selectedIndex = 0; // Reiniciar el select de dirigida a

    // Redireccionar a la ruta deseada
    window.location.href = "index.php?ruta=publicar/Poferta/Poferta";
  }
</script>