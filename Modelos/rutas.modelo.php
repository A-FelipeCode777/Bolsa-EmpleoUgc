<?php
class RutasModelo{
   static public function RutasModelo($ruta){
        if ($ruta == "usuarios/Candidatos/candidatos" 
         || $ruta == "usuarios/Empresas/empresa" || 
            $ruta== "publicar/Panuncios/anuncio"
         || $ruta == "publicar/Poferta/Poferta" || 
            $ruta == "dashboard/dashboard" ||
            $ruta == "Calendar/eventos" || 
            $ruta == "publicar/verofer/verOfertas") 
            {
            /** crear variable para guardar la ruta al archivo php que vayamos a abrir  */
            $pagina = "./Vistas/" . $ruta . ".vista.php";
            return $pagina;

            /** ./Vistas/ususarios/Candidatos/candidatos.vista.php O ./Vistas/ususarios/Empresas/empresa.vista.php*/
        }else {
           $pagina = "./Vistas/principal;" . $ruta . ".vista.php";
           return $pagina;
        }
    }
    
}

?>