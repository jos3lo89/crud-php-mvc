<?php
$usuarioC = new UsuarioC();
$usuarioC->registrarC();

$datos = $usuarioC->updateConsultaC();

$usuarioC->updateC();
?>

<div class="registrarBox">
  <div class="registroTitle">
    <h1>Registrar</h1>
  </div>
  <div class="formBox">
    <form method="post">
      <input type="text" name="nombre" id="nombreF" placeholder="Nombre" value="<?= (isset($datos['nombre']) ? $datos['nombre'] : '') ?>">
      <input type="text" name="apellido" id="apellidoF" placeholder="Apellido" value="<?= (isset($datos['apellido']) ? $datos['apellido'] : '')  ?>">
      <input type="text" name="edad" id="edadF" placeholder="Edad" value="<?= (isset($datos['edad']) ? $datos['edad'] : '')  ?>">
      <?php
      if (isset($datos['id'])) { ?>
        <input type="hidden" name="id" value="<?= $datos['id'] ?>">
      <?php }
      ?>
      <div class="submitBtn">
        <button type="submit" name="<?= isset($datos['id']) ? 'actualizar_usuario' : 'registrar_usuario' ?>"><?= isset($datos['id']) ? 'Actualizar' : 'Registrar' ?></button>
      </div>
    </form>
  </div>
</div>