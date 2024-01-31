<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crud - php</title>
  <link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
<?php
include 'contenido/menu.php';
?>

<section>
  <?php
  $rutaC = new RutasC();
  $temple = $rutaC->procesarRutasC();
  include $temple;
  ?>
</section>

</body>
</html>