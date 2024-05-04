<?php
require_once "./Controladores/pofertas/pofertas.controller.php"

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ofertas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Oferta</li>
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
                <h3 class="card-title"style="color: white;">Listado De Ofertas Disponibles</h3>

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
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <a href="index.php?ruta=publicar/Poferta/poferta.crear" class="btn btn-success btn-sm">Nueva Oferta</a>
                      </div>

        <!-- Main content Tabla -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gestión de Ofertas Laborales</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead class="table-success">
                                        <tr> 
                                            <th>Oferta Id</th>
                                            <th>Nombre Empresa</th>
                                            <th>Correo</th>
                                            <th>Sector</th>
                                            <th>Teléfono</th>
                                            <th>Descripción</th>
                                            <th>Dirigida a</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                     $Ofertas= PofertaController::index();
                                     foreach($Ofertas as $key => $Oferta){
                                        echo ' <tr>
                                        <td>'.$Oferta["oferta_id"].'</td>
                                        <td>'.$Oferta["nombre_empresa"].'</td>
                                        <td>'.$Oferta["correo"].'</td>
                                        <td>'.$Oferta["sector"].'</td>
                                        <td>'.$Oferta["telefono"].'</td>
                                        <td>'.$Oferta["descripcion"].'</td>
                                        <td>'.$Oferta["dirigido"].'</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-eye nav-icon"></i> <span>Consultar</span></a>
                                            <a href="index.php?ruta=publicar/Poferta/poferta.editar&oferta_id='.$Oferta['oferta_id'].'" class="btn btn-primary btn-sm">
                                                <i class="far fa-edit"></i> Editar
                                            </a>
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
