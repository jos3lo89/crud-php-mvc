<?php
require_once 'conexion.php';

class UsuarioM extends ConexionM
{
  public function registrarM()
  {
    $conn = ConexionM::connDB();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $insertar = "INSERT INTO usuario(nombre,apellido,edad) VALUES ('$nombre','$apellido',$edad)";
    $resultado = $conn->query($insertar);
    return $resultado;
  }

  public function mostrarM()
  {
    $conn = ConexionM::connDB();
    $mostrar = "SELECT * FROM usuario";
    $resultado = $conn->query($mostrar);
    return $resultado;
  }

  public function borrarM()
  {
    $conn = ConexionM::connDB();
    $id = $conn->real_escape_string($_GET['idBorar']);
    $qryBorrar = "DELETE FROM usuario WHERE id = $id";
    $resultado = $conn->query($qryBorrar);
    header("location: index.php?ruta=inicio");
    return $resultado;
  }

  public function updateConsultaM()
  {
    $conn = ConexionM::connDB();
    $id = $conn->real_escape_string($_GET['idEdit']);

    $consultaUser = "SELECT * FROM usuario WHERE id = $id";
    $datos = $conn->query($consultaUser);
    $fila = $datos->fetch_array(MYSQLI_ASSOC);

    $datosUser = array(
      "nombre" => $fila['nombre'],
      "apellido" => $fila['apellido'],
      "edad" => $fila['edad'],
      "id" => $fila['id']
    );

    return $datosUser;
  }

  public function updateM()
  {
    $conn = ConexionM::connDB();
    $id = $conn->real_escape_string($_POST['id']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $edad = $conn->real_escape_string($_POST['edad']);

    $qryActualizar = "UPDATE  usuario SET nombre = '$nombre', apellido = '$apellido', edad = $edad WHERE id = $id;";
    $resultado = $conn->query($qryActualizar);
    if ($resultado) {
      header("location: index.php?ruta=inicio");
      return $resultado;
    }
  }
}
