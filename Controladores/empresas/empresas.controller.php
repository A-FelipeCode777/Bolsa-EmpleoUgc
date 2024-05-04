<?php
    /* =============================================================================================================
    * Desarrollado Por    		: Alexandra, Andres Felipe, Efrain Lopez Mazo
    * Fecha de Creación 		  : 03 Mayo 2024
    * Lenguaje Programación 	: PHP
    * Producto o sistema    	: Bolsa Empleougc
    * Tipo                    : Controlador
    * ====================================================================================================================
    * Versión Descripción
    * [1.0.0.0] Controlador de la tabla Empresa
    * ====================================================================================================================
    * MODIFICACIONES:
    * ====================================================================================================================
    * Ver.      Fecha    		  Autor – Empresa                       Descripción
    * --------- ------------- -----------------------------------   -------------------------------------------------------
    * 1.0       26/04/2024    Efrain Lopez Mazo        Versión inicial del controladopr
    * ====================================================================================================================
    */


    require_once "./Modelos/empresa/empresa.model.php";
    
    class EmpresaController{

		  
      // Método para recuperar listado de los registros
      static public function  index(){

        // LLamar al modelo para recuperar todos los registros de la tabla
        $data = EmpresaModel::index();
        return  $data;
      }


      // Método para crear registros
      static function create()
      {

         /** Validar que vengan datos en las variables pasadas desde la vista */
         if (isset($_POST["addInputNit"])
             && isset($_POST["addInputNombreEmpresa"])
             && isset($_POST["addInputCorreo"])
             && isset($_POST["addInputSector"])
             && isset($_POST["addInputTelefono"])
         ) 
         {
           $data = array(	"addInputNit" => $_POST["addInputNit"],
                           "addInputNombreEmpresa" => $_POST["addInputNombreEmpresa"],
                           "addInputCorreo" => $_POST["addInputCorreo"],
                           "addInputSector" => $_POST["addInputSector"],
                           "addInputTelefono" => $_POST["addInputTelefono"]
                           //"userId" => $_SESSION["userId"] 
                       );


                       
           // Ejecutar el metodo create del modelo
           $response = EmpresaModel::create($data);
           
            //ENVIAR MENSAJE DE REGISTRO ALMACENADO CON ÉXITO
           if($response == "Ok")
               {
                echo 'Swal.fire("SweetAlert2 is working!")';
                 /** Enviar mensaje de creación correcta */
                   echo '<script>
                   
                           Swal.fire({
                             icon: "success",
                             title: "La empresa ha sido creada de forma correcta.",
                         
                             showConfirmButton: true,
                             confirmButtonText: "Aceptar"
                             }).then(function(result){
                                         if (result.value) {
                                             /**Redireccionar a la página principal de empresa */
                                             window.location.href = "index.php?ruta=usuarios/Empresas/empresa";
                                         }
                                     })
                         </script>';

               }
               else{
                   echo "error controlador";
               }
       }

      }


    }
?>