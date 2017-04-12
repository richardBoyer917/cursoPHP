<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ficha</title>
  </head>
  <body>
    <h1>Ficha con datos</h1>
    <?php
      echo "Su nombre es: ".$_POST['txtname'];
      echo "<br />";
      echo "Su apellido es: ".$_POST['txtlastname'].".";
      echo "<br />";
      echo "Su contraseña tiene: ".strlen($_POST['txtpass'])." caracteres.";
    ?>
  </body>
</html>
