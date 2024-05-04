  
   <?php
   // ruta del controlador
		// require_once "./controladores/empresa.controller.php";
     require_once "./Controladores/empresas/empresas.controller.php"
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nueva Empresa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item">Parámetros</li>
              <li class="breadcrumb-item">Empresa</li>
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
                            <h3 class="card-title">DATOS</h3>
                        </div>
                          <div class="card-body">
                            <form method="post">
                              <div class="form-group">
                                  <label for="inputNit">NIT</label>
                                  <input type="number" id="inputNit" class="form-control"  name="addInputNit" placeholder="Ingrese el código. 10 Caracteres.">
                              </div>
                              <div class="form-group">
                                  <label for="inputNombreEmpresa">Nombre Empresa</label>
                                  <input type="text" id="inputNombreEmpresa" class="form-control"  name="addInputNombreEmpresa" placeholder="Ingrese nombre de la empresa" required minlength="6" maxlength="50">
                              </div>
							                <div class="form-group">
                                  <label for="inputCorreo">Correo</label>
                                  <input type="email" id="inputCorreo" class="form-control"  name="addInputCorreo" placeholder="Ingrese correo">
                              </div>
                              <div class="form-group">
                                  <label for="inputSector">Sector</label>
                                  <input type="text" id="inputSector" class="form-control"  name="addInputSector" placeholder="Ingrese sector de la empresa" required minlength="6" maxlength="50">
                              </div>
                              <div class="form-group">
                                  <label for="inputTelefono">Telefono</label>
                                  <input type="number" id="inputTelefono" class="form-control"  name="addInputTelefono" placeholder="Ingrese un numero de contacto" required minlength="3" maxlength="50">
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
    $addEmpresaModel = EmpresaController::create();

?>

<script>
  function limpiarFormulario() {
    document.getElementById("inputNit").value = ""; // Limpiar campo de nit
    document.getElementById("inputNombreEmpresa").value = ""; // Limpiar campo de nombre empresa
    document.getElementById("inputCorreo").value = ""; // Limpiar campo de correo
    document.getElementById("inputSector").value = ""; // Limpiar campo de sector
    document.getElementById("inputTelefono").value = ""; // Limpiar campo de teléfono

    // Redireccionar a la ruta deseada
    window.location.href = "index.php?ruta=usuarios/Empresas/empresa";
  }
</script>