<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Área de un círculo</title>
    <link rel="stylesheet" type="text/css" href="area_circulo.css"/ media="screen">
  </head>
  <body>
    <h1>RESULTADO</h1>
    <?php
      $PI = 3.14159;
      $area = pow($_GET['radio'],2) * $PI;
      echo "El área es: ".$area." u^2."
    ?>
  </body>
</html>
