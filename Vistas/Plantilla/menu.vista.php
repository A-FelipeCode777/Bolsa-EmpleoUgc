 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="../../index3.html" class="brand-link">
     <img src="assets/imagenes/AdminLTELogo.png" alt="Bolsa de Empleo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">JobUGC</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="assets/imagenes/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Usuario Admin</a>
       </div>
     </div>

     <!-- Gesstion de porcesos -->
     <li class="nav-header">Monitoreo</li>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Monitorear</li>
          <li class="nav-item">
            <a href="index.php?ruta=dashboard/dashboard" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Dashboard
                <i class="" ></i>
              </p>
            </a>
          </li>
          <li class="nav-header">Gestionar</li>
          <li class="nav-item">
            <a href="index.php?ruta=Calendar/eventos" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Programar Eventos
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-solid fa-briefcase"></i>
              <p>
                Ofertas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?ruta=publicar/verofer/verOfertas" class="nav-link">
                  <i class="nav-icon fas fa-eye"></i>
                  <p>Ver Ofertas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?ruta=publicar/Poferta/Poferta" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Publicar Ofertas</p>
                </a>
              </li>
            </ul>
          </li>     
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php?ruta=publicar/Panuncios/anuncio" class="nav-link">
                  <i class="nav-icon fas fa-cogs fa-2x"></i>
                  <p>Roles y Permisos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?ruta=usuarios/Candidatos/candidatos" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Candidatos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?ruta=usuarios/Empresas/empresa" class="nav-link">
                  <i class="nav-icon fas fa-city"></i>
                  <p>Empresas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
   </div>
   <!-- /.sidebar -->
 </aside>

