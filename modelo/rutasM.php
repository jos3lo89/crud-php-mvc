<?php
class RutasM
{
  public function procesarRutasM($ruta){
    if  (
      $ruta === 'inicio'||
      $ruta === 'registrar'
    ) {
      $contenido = "vista/contenido/".$ruta.".php";
    } else {
      
      $contenido = "vista/contenido/inicio.php";
    }

    return $contenido;
  }
}

?>