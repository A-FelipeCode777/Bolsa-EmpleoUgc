<?php
require_once "./Controladores/usuarios/usuarios.controller.php";

?>
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
                        <a href="index.php?ruta=publicar/Panuncios/anuncio.crear" class="btn btn-success btn-sm">Nuevo Usuario</a>
                      </div>

        <!-- Main content Tabla -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gestión de Usuarios</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead class="table-success">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre Usuario</th>
                                            <th>Correo Institucional</th>
                                            <th>Rol</th>
                                            <th>Teléfono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                     $Usuarios= UsuarioController::index();
                                     foreach($Usuarios as $key => $Usuario){
                                        echo ' <tr>
																	<td>'.$Usuario["id_usuario"].'</td>
																	<td>'.$Usuario["usuario_nombre"].'</td>
																	<td>'.$Usuario["usuario_Email"].'</td>
																	<td>'.$Usuario["usuario_Rol"].'</td>
																	<td>'.$Usuario["usuario_Telefono"].'</td>
																	<td>
																		<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-eye nav-icon"></i> <span>Consultar</a>
																		<a href="#" class="btn btn-primary btn-sm"><i class="far fa-edit nav-icon"></i> <span></i> <span>Editar</a>
																		<a href="#" class="btn btn-danger btn-sm" Id =""><i class="fa fa-trash nav-icon"></i> <span>Eliminar</span></a>
																	</td>
																</tr>';
                                     }
                                    ?>
                                    <!-- Otros datos de candidatos aquí -->
                                </tbody>
                                    
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
      <!-- /.content-wrapper -->
      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js">

      </script>
    </div>
  </section>
</div>