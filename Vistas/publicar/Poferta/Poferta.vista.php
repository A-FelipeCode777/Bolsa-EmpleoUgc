<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear Ofertas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Crear Ofertas</li>
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
                <h3 class="card-title">Title</h3>

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
                Estás en la Página Para Crear Ofertas
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        <!-- Main content Tabla -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Información de La Oferta</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titulo del Trabajo</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                                    </div>
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                Dirigida a
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="#">Estudiantes</a></li>
                                                <li class="dropdown-item"><a href="#">Practicas</a></li>
                                                <li class="dropdown-item"><a href="#">Profesionales</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="#">Con Postgrados</a></li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Cargar Archivo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Cargue archivos png.jpg.</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Subir</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Publicar</button>
                                </div>
                            </form>
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
