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
 require_once "./Modelos/poferta/poferta.model.php";
 
 class PofertaController
 {
   // Método para recuperar listado de los registros
   static public function index()
   {
     // LLamar al modelo para recuperar todos los registros de la tabla
     $data = PofertaModel::index();
     return $data;
   }
 
   // Método para crear registros
   static function create()
   {
     /** Validar que vengan datos en las variables pasadas desde la vista */
     if (
       isset($_POST["addInputId"])
       &&isset($_POST["addInputNombreEmpresa"])
       && isset($_POST["addInputCorreo"])
       && isset($_POST["addInputSector"])
       && isset($_POST["addInputTelefono"])
       && isset($_POST["addInputDescripcion"])
       && isset($_POST["addInputDirigida"])
     ) {
       $data = array(
         "addInputId" => $_POST["addInputId"],
         "addInputNombreEmpresa" => $_POST["addInputNombreEmpresa"],
         "addInputCorreo" => $_POST["addInputCorreo"],
         "addInputSector" => $_POST["addInputSector"],
         "addInputTelefono" => $_POST["addInputTelefono"],
         "addInputDescripcion" => $_POST["addInputDescripcion"],
         "addInputDirigida" => $_POST["addInputDirigida"]
       );
 
       // Ejecutar el metodo create del modelo
       $response = PofertaModel::create($data);
 
       if ($response == "Ok") {
         // Enviar mensaje de creación correcta
         echo '<script>
           Swal.fire({
             icon: "success",
             title: "La empresa ha sido creada de forma correcta.",
             showConfirmButton: true,
             confirmButtonText: "Aceptar"
           }).then(function(result){
             if (result.value) {
               window.location.href = "index.php?ruta=publicar/Poferta/Poferta";
             }
           });
         </script>';
       } else {
         echo "error controlador";
       }
     }
 
     // Aquí va el código para manejar la actualización
     if (isset($_POST['editInputNombreEmpresa'])) {
       $oferta_id = $_POST['oferta_id'];
       // Capturar otros campos del formulario
       $data = array(
         "nombre_empresa" => $_POST['editInputNombreEmpresa'],
         "correo" => $_POST['editInputCorreo'],
         "sector" => $_POST['editInputSector'],
         "telefono" => $_POST['editInputTelefono'],
         "descripcion" => $_POST['editInputDescripcion'],
         "dirigido" => $_POST['editInputDirigida']
       );
       // Llamar al método del modelo para actualizar la oferta
       $resultado = PofertaController::update($oferta_id, $data);
       if ($resultado === "Ok") {
         // Éxito al actualizar la oferta, redirigir a una página de éxito o a la lista de ofertas
         header("Location: index.php?ruta=publicar/Poferta/Poferta");
         exit(); // Importante para evitar que se ejecute más código después de la redirección
       } else {
         // Manejar el caso de error
         echo "Error al actualizar la oferta.";
       }
     }
   }
 
   // Método para actualizar registros
   static function update($oferta_id, $data)
   {
     // Llamar al método del modelo para actualizar la oferta
     return PofertaModel::update($oferta_id, $data);
   }
 
   // Método para obtener la oferta por su ID y pasarla a la vista de edición
   static function editar($oferta_id)
   {
     // Llamar al método del modelo para obtener la oferta por su ID
     $Oferta = PofertaModel::getOfertaById($oferta_id);
 
     // Pasar la información de la oferta a la vista de edición
     require_once "./Vistas/publicar/Poferta/poferta.editar.vista.php";
   }
 }
 ?>
 