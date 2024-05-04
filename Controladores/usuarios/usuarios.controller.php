<?php
    /* =============================================================================================================
    * Desarrollado Por    		: Alexandra Ordoñez, Andres Felipe, Efrain Lopez Mazo
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


    require_once "./Modelos/usuario/usuario.model.php";
    
    class UsuarioController{

		  
      // Método para recuperar listado de los registros
      static public function  index(){

        // LLamar al modelo para recuperar todos los registros de la tabla
        $data = UsuarioModel::index();
        return  $data;
      }


      // Método para crear registros
      static function create()
      {

         /** Validar que vengan datos en las variables pasadas desde la vista */
         if (isset($_POST["addInputNombreUsuario"])
             && isset($_POST["addInputCorreo"])
             && isset($_POST["addInputRol"])
             && isset($_POST["addInputTelefono"])
         ) 
         {
           $data = array(	"addInputNombreUsuario" => $_POST["addInputNombreUsuario"],
                           "addInputCorreo" => $_POST["addInputCorreo"],
                           "addInputRol" => $_POST["addInputRol"],
                           "addInputTelefono" => $_POST["addInputTelefono"],
                           //"userId" => $_SESSION["userId"] 
                           "id" => 1
                       );


                       
           // Ejecutar el metodo create del modelo
           $response = UsuarioModel::create($data);
           
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
                                             window.location.href = "index.php?ruta=publicar/Panuncios/anuncio";
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