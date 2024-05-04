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
    class EmpresaModel{

        public static function index(){

            try {
              /** Realizar la consulta a la base de datos */
              $datos = Connection::connect()->prepare("SELECT emp.nit, emp.nombre_empresa, emp.correo, emp.correo, emp.sector, emp.telefono
                              FROM empresa AS emp
                              ORDER BY emp.nit ASC ");
        
              /**Ejecutar la consulta */
              $datos->execute(); 
        
              /** Devuelve los datos consultados */
              return $datos->fetchAll();
        
              /**Cerrar conexion a la bd */
              $datos->close();
        
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }
          }
        
          //Método para guardar registro en la tabla de la base de datos
          public static function create($data)
          {
        
            //-- Validar que no exista un registro con el mismo codigo
        
            $exist = Connection::connect()->prepare("select * from empresa where nit = :nit");
        
            // 2- Asignar parametros
            $exist -> bindParam(":nit",$data["addInputNit"], PDO::PARAM_STR);
        
            //3 ejecutar la consulta
            //$exist->execute()->fetchAll();
        
             /**Ejecutar la consulta */
             if($exist->execute()){
        
              $exist->fetchAll();
              
              if($exist->rowCount() > 0)
              {
                // hay registros ya existe
                /** Enviar mensaje de creación correcta */
                echo '<script>
                   
                Swal.fire({
                  icon: "error",
                  title: "La empresa ya existe.",
              
                  showConfirmButton: true,
                  confirmButtonText: "Aceptar"
                  }).then(function(result){
                              if (result.value) {
                                  /**Redireccionar a la página principal de empresas */
                                  window.location.href = "index.php?ruta=usuarios/Empresas/empresa";
                              }
                          })
              </script>';
              }
              else {
                        // 1 - Crear la consulta para inserción en la tabla
                        $create = Connection::connect()->prepare("INSERT INTO empresa (nit, nombre_empresa, correo, sector, telefono)
                        VALUES( :addInputNit, :addInputNombreEmpresa, :addInputCorreo, :addInputSector, :addInputTelefono)");
                
                
                        /**Asignar parametros*/
                        $create -> bindParam(":addInputNit",$data["addInputNit"], PDO::PARAM_INT);
                        $create -> bindParam(":addInputNombreEmpresa",$data["addInputNombreEmpresa"], PDO::PARAM_STR);
                        $create -> bindParam(":addInputCorreo",$data["addInputCorreo"], PDO::PARAM_STR);
                        $create -> bindParam(":addInputSector",$data["addInputSector"], PDO::PARAM_STR);
                        $create -> bindParam(":addInputTelefono",$data["addInputTelefono"], PDO::PARAM_INT);
                
                        /**Ejecutar la consulta */
                        if($create -> execute()){
                            return "Ok";
                        }
                        else{
                            return "Error Modelo";
                        }
                        
                        /**Cerrar conexion a la bd */
                        $create->close();
                      }
              }
        
              }
              
              
        
        
          
        
        }
        
    ?>