<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ofertas Laborales </h1>
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
      <div class="card-header" style="background-color: seagreen;">
        <h3 class="card-title" style="color: white;">Ofertas Publicadas</h3>

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
      En esta sección del sistema, podrá visualizar todas las ofertas laborales que han sido publicadas por las empresas registradas en nuestra base de datos.
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
              <h3 class="card-title">Gestión de Ofertas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead class="table-primary">
                  <tr>
                    <th>Nombre Empresa</th>
                    <th>Correo</th>
                    <th>Sector</th>
                    <th>Teléfono</th>
                    <th>Descripción</th>
                    <th>Acciones</th> <!-- Nueva columna para los botones -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Microsoft SAS</td>
                    <td>microsoft@mail.com</td>
                    <td>Tecnología</td>
                    <td>(601) 3264700</td>
                    <td>Estudiante Ingeniería Software</td>
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
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>Abogado Especialista</td>
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
