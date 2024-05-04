<?php
class RutasModelo{
   static public function RutasModelo($ruta){
        if ($ruta == "usuarios/Candidatos/candidatos" 
         || $ruta == "usuarios/Empresas/empresa" || 
            $ruta== "publicar/Panuncios/anuncio"
         || $ruta == "publicar/Poferta/Poferta" || 
            $ruta == "dashboard/dashboard" ||
            $ruta == "Calendar/eventos" || 
            $ruta == "usuarios/Empresas/empresa.crear"||
            $ruta == "publicar/Poferta/poferta.crear"||
            $ruta == "publicar/Poferta/poferta.editar"||
            $ruta == "publicar/Panuncios/anuncio.crear"||
            $ruta == "publicar/verofer/verOfertas") {
            /** crear variable para guardar la ruta al archivo php que vayamos a abrir  */
            $pagina = "./Vistas/" . $ruta . ".vista.php";
            return $pagina;

            /** ./Vistas/usuarios/Candidatos/candidatos.vista.php O ./Vistas/usuarios/Empresas/empresa.vista.php*/
        }else {
           $pagina = "./Vistas/principal;" . $ruta . ".vista.php";
           return $pagina;
        }
    }
    
}

?>