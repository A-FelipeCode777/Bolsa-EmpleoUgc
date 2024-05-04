<?php
require_once "./Controladores/empresas/empresas.controller.php"

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Empresas</h1>
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
            <div class="card-header"style="background-color: seagreen;">
                <h3 class="card-title"style="color: white;">Listado de Empresas Registradas</h3>

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
            En esta sección, encontrarás todas las empresas que se han registrado en la bolsa de empleo. Aquí podrás monitorear la cantidad de ofertas que ha publicado cada empresa, así como acceder a sus datos de contacto y otra información relevante. Esto te proporciona una visión completa de las empresas activas en nuestra plataforma y facilita la gestión de oportunidades laborales.
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <a href="index.php?ruta=usuarios/Empresas/empresa.crear" class="btn btn-success btn-sm">Nuevo registro</a>
                      </div>

        <!-- Main content Tabla -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gestión de Empresas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead class="table-success">
                                        <tr>
                                            <th>Nit</th>
                                            <th>Nombre Empresa</th>
                                            <th>Correo</th>
                                            <th>Sector</th>
                                            <th>Teléfono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                     $Empresas= EmpresaController::index();
                                     foreach($Empresas as $key => $Empresa){
                                        echo ' <tr>
																	<td>'.$Empresa["nit"].'</td>
																	<td>'.$Empresa["nombre_empresa"].'</td>
																	<td>'.$Empresa["correo"].'</td>
																	<td>'.$Empresa["sector"].'</td>
																	<td>'.$Empresa["telefono"].'</td>
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
