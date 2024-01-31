<?php
class RutasC
{
  public $rutaM;
  public function __construct()
  {
    $this->rutaM = new RutasM();
  }
  public function procesarRutasC()
  {
    if (isset($_GET['ruta'])) {
      $ruta = $_GET['ruta'];
    } else {
      $ruta = 'index';
    }
    return  $this->rutaM->procesarRutasM($ruta);
  }


}

?>