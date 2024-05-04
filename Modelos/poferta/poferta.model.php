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
require_once "./Modelos/connection.php";

class PofertaModel
{

  public static function index()
  {

    try {
      /** Realizar la consulta a la base de datos */
      $datos = Connection::connect()->prepare("SELECT ofr.oferta_id, ofr.nombre_empresa, ofr.correo, ofr.sector, ofr.telefono, ofr.descripcion, dirigido
                              FROM oferta AS ofr
                              ORDER BY ofr.oferta_id ASC ");

      /**Ejecutar la consulta */
      $datos->execute();

      /** Devuelve los datos consultados */
      return $datos->fetchAll();


    } catch (Exception $e) {
      echo $e->getMessage();
      die();
    }
  }

  // Método para guardar registro en la tabla de la base de datos
  public static function create($data)
  {
    $create = Connection::connect()->prepare("INSERT INTO oferta (nombre_empresa, correo, sector, telefono, descripcion, dirigido)
      VALUES (:nombre_empresa, :correo, :sector, :telefono, :descripcion, :dirigido)");

    $create->bindParam(":nombre_empresa", $data["addInputNombreEmpresa"], PDO::PARAM_STR);
    $create->bindParam(":correo", $data["addInputCorreo"], PDO::PARAM_STR);
    $create->bindParam(":sector", $data["addInputSector"], PDO::PARAM_STR);
    $create->bindParam(":telefono", $data["addInputTelefono"], PDO::PARAM_INT);
    $create->bindParam(":descripcion", $data["addInputDescripcion"], PDO::PARAM_STR);
    $create->bindParam(":dirigido", $data["addInputDirigida"], PDO::PARAM_STR);

    if ($create->execute()) {
      return "Ok";
    } else {
      return "Error Modelo";
    }
  }

  public static function getOfertaById($oferta_id)
  {
    try {
      $query = "SELECT * FROM oferta WHERE oferta_id = :oferta_id";
      $statement = Connection::connect()->prepare($query);
      $statement->bindParam(":oferta_id", $oferta_id, PDO::PARAM_INT);
      $statement->execute();
      return $statement->fetch(PDO::FETCH_ASSOC); // Devuelve la oferta como un array asociativo
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false; // O manejar el error de otra manera
    }
  }

public static function update($oferta_id, $data) {
  try {
      $query = "UPDATE oferta SET nombre_empresa = :nombre_empresa, correo = :correo, sector = :sector, telefono = :telefono, descripcion = :descripcion, dirigido = :dirigido WHERE id = :oferta_id";
      $statement = Connection::connect()->prepare($query);
      // Enlazar parámetros
      $statement->bindParam(':nombre_empresa', $data['nombre_empresa']);
      $statement->bindParam(':correo', $data['correo']);
      $statement->bindParam(':sector', $data['sector']);
      $statement->bindParam(':telefono', $data['telefono']);
      $statement->bindParam(':descripcion', $data['descripcion']);
      $statement->bindParam(':dirigido', $data['dirigido']);
      $statement->bindParam(':oferta_id', $oferta_id);
      // Ejecutar la consulta
      $statement->execute();
      return "Ok"; // Éxito al actualizar la oferta
  } catch (PDOException $e) {
      // Manejar el error
      echo $e->getMessage();
      return "Error en el modelo"; // o cualquier otro mensaje de error
  }
}

}
?>
