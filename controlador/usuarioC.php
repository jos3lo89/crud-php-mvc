<?php

class UsuarioC
{
  public $usuarioM;

  public function __construct()
  {
    $this->usuarioM = new UsuarioM();
  }

  public function registrarC()
  {
    if (isset($_POST['registrar_usuario'])) {
      return $this->usuarioM->registrarM();
    }
  }

  public function mostrarC()
  {
    return $this->usuarioM->mostrarM();
  }

  public function borraC()
  {
    if (isset($_GET['idBorar'])) {
      return $this->usuarioM->borrarM();
    }
  }

  public function updateConsultaC()
  {
    if (isset($_GET['idEdit'])) {
      return $this->usuarioM->updateConsultaM();
    }
  }

  public function updateC()
  {
    if (isset($_POST['actualizar_usuario'])) {
      return $this->usuarioM->updateM();
    }
  }
}
