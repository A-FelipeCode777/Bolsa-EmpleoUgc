<?php
/* =============================================================================================================
 * Desarrollado Por    		: Alexandra, Andres Felipe, Efrain Lopez Mazo
 * Fecha de Creación 		  : 03 Mayo 2024
 * Lenguaje Programación 	: PHP
 * Producto o sistema    	: Bolsa Empleougc
 * Tipo                    : Model
 * ====================================================================================================================
 * Versión Descripción
 * [1.0.0.0] Model de la tabla Empresa
 * ====================================================================================================================
 * MODIFICACIONES:
 * ====================================================================================================================
 * Ver.      Fecha    		  Autor – Empresa                       Descripción
 * --------- ------------- -----------------------------------   -------------------------------------------------------
 * 1.0       26/04/2024    Efrain Lopez Mazo        Versión inicial del controladopr
 * ====================================================================================================================
 */
require_once "./Modelos/conexionBD.php";
class UsuarioModel
{

  public static function index()
  {

    try {
      /** Realizar la consulta a la base de datos */
      $datos = Connection::connect()->prepare("SELECT bd.id_usuario, bd.usuario_nombre, bd.usuario_Email, bd.usuario_Rol, bd.usuario_Telefono
                              FROM bdbem AS bd
                              ORDER BY bd.id_usuario ASC ");

      /**Ejecutar la consulta */
      $datos->execute();

      /** Devuelve los datos consultados */
      return $datos->fetchAll();


    } catch (Exception $e) {
      echo $e->getMessage();
      die();
    }
  }

  //Método para guardar registro en la tabla de la base de datos
  public static function create($data)
  {
    $exist = Connection::connect()->prepare("SELECT * FROM bdbem WHERE usuario_Email = :usuario_Email");
    $exist->bindParam(":usuario_Email", $data["addInputCorreo"], PDO::PARAM_STR);
    $exist->execute();

    if ($exist->rowCount() > 0) {
      echo '<script>
              Swal.fire({
                  icon: "error",
                  title: "El correo electrónico ya está en uso.",
                  showConfirmButton: true,
                  confirmButtonText: "Aceptar"
              }).then(function(result){
                  if (result.value) {
                      window.location.href = "index.php?ruta=publicar/Panuncios/anuncio";
                  }
              });
          </script>';
    } else {
      $create = Connection::connect()->prepare("INSERT INTO bdbem (usuario_nombre, usuario_Email, usuario_Rol, usuario_Telefono)
        VALUES (:usuario_nombre,:usuario_Email, :usuario_Rol, :usuario_Telefono)");

      $create->bindParam(":usuario_nombre", $data["addInputNombreUsuario"], PDO::PARAM_STR);
      $create->bindParam(":usuario_Email", $data["addInputCorreo"], PDO::PARAM_STR);
      $create->bindParam(":usuario_Rol", $data["addInputRol"], PDO::PARAM_STR);
      $create->bindParam(":usuario_Telefono", $data["addInputTelefono"], PDO::PARAM_INT);

      if ($create->execute()) {
        return "Ok";
      } else {
        return "Error Modelo";
      }
    }
  }


}


?>