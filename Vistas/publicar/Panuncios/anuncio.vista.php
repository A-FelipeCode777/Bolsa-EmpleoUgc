<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Roles y Perfiles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Empresa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Administración de Permisos</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        La administración de roles y ususarios, podras crear nuevos ususarios  y asignar permisos  nuevos ususarios de Administración del sistema .
      </div>
      <!-- /.card-body -->

      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  <!-- Main content Tabla -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-success btn-sm" type="button">Crear Usuario</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead class="table-success">
                  <tr>
                    <th>Nombre del Usuario</th>
                    <th>Correo Institucional</th>
                    <th>Rol</th>
                    <th>Teléfono</th>
                    <th>Acciones</th> <!-- Nueva columna para los botones -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Valentina Mojica chacon Suarez</td>
                    <td>vel_65@mail.microsoft.es</td>
                    <td>Asitente Ejecutor</td>
                    <td>324000501</td>
                    
                    <td class="text-center">
                      <button class="btn btn-info btn-sm" onclick="ver()">
                        <i class="fas fa-eye"></i> <!-- Icono para ver -->
                      </button>
                      <button class="btn btn-danger btn-sm" onclick="eliminar()">
                        <i class="fas fa-trash-alt"></i> <!-- Icono para eliminar -->
                      </button>
                      <button class="btn btn-success btn-sm" onclick="editar()">
                        <i class="fas fa-edit"></i> <!-- Icono para editar -->
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Fredy Daniel Vega Zapata</td>
                    <td>Fredi.Vega@microsoft.es</td>
                    <td>Auxiliar de Control</td>
                    <td>3245645415</td>
                    
                    <td class="text-center">
                      <button class="btn btn-info btn-sm" onclick="ver()">
                        <i class="fas fa-eye"></i> <!-- Icono para ver -->
                      </button>
                      <button class="btn btn-danger btn-sm" onclick="eliminar()">
                        <i class="fas fa-trash-alt"></i> <!-- Icono para eliminar -->
                      </button>
                      <button class="btn btn-success btn-sm" onclick="editar()">
                        <i class="fas fa-edit"></i> <!-- Icono para editar -->
                      </button>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /.content-wrapper -->
       <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
  </section>
</div>
