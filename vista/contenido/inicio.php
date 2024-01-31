<?php
$usuarioC = new UsuarioC();
$datos = $usuarioC->mostrarC();
$filas = $datos->num_rows;

$usuarioC->borraC();
?>
<div class="inicoBox">
  <div class="inicioTitle">
    <h1>Lista de usuarios</h1>
  </div>
  <div class="userBox">

    <?php
    for ($i = 0; $i < $filas; $i++) {

      $fila = $datos->fetch_array(MYSQLI_ASSOC);
      $nombre = $fila['nombre'];
      $apellido = $fila['apellido'];
      $edad = $fila['edad'];
      $id = $fila['id'];
    ?>
      <div class="user">
        <p><?= $nombre ?></p>
        <p><?= $apellido ?></p>
        <span><?= $edad ?></span>
        <div class="btnSettings">
          <a href="index.php?ruta=registrar&idEdit=<?= $id ?>">Editar</a>
          <a class="rojo" href="index.php?ruta=inicio&idBorar=<?= $id ?>">Eliminar</a>
        </div>
      </div>
    <?php }
    ?>

  </div>
</div>