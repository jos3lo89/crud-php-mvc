<?php

class ConexionM
{
  private $server = "localhost";
  private $nombre = "root";
  private $clave = "3322";
  private $db_nombre = "personas";
  private $port = 3306;

  public function connDB(){
    $conn = new mysqli($this->server,$this->nombre,$this->clave,$this->db_nombre,$this->port);
    return $conn;
  }
}
?>