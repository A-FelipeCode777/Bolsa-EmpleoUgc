<?php
  
class RutasControlador {
     
    public function IniciarPlantilla() {
        include "./Vistas/Plantilla/plantilla.vista.php";
    }

    /** Armar la ruta del formulario */
    public function Rutas() {
        // Verificar si $_GET["ruta"] está definido
        if (isset($_GET["ruta"])) {
            $ruta = $_GET["ruta"];
        } else {
            // Asignar un valor predeterminado si $_GET["ruta"] no está definido
            $ruta = "dashboard/daschboard";
        }

        // Llamar al modelo para armar la ruta
        $rutaformulario = RutasModelo::RutasModelo($ruta);

        // Verificar si $rutaformulario es una ruta válida antes de incluirla
        if (!empty($rutaformulario) && is_file($rutaformulario)) {
            include $rutaformulario;
        } else {
            // Manejar el caso en el que $rutaformulario no es válido
            echo "Error: La ruta del formulario no es válida.";
        }
    }
}

?>

