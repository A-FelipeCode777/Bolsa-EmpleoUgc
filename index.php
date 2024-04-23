<?php
   /** Aqui se incluye los archivos de controladores requeridos */
   
   require_once "Controladores/rutas.controlador.php";



  /** Aqui se incluye los archivos de modelos requeridos */

  require_once "Modelos/rutas.modelo.php";


  /** aqui se deben inicializar las clases */
  $rutas = new RutasControlador();
  

  /** Ejecutar los metoso o las funciones  */

  $rutas -> IniciarPlantilla();

?>