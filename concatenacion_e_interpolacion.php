<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2. Concatenación e interpolación</title>
  </head>
  <body>
    <?php
      echo "<h1>Concatenación</h1>";
      $nombre = "David ";
      $nombre_completo = $nombre . "Betancourt";
      echo $nombre_completo;
      echo "\n";
      //Otra forma
      $nombre_completo .= " Montellano";
      echo "$nombre_completo";

      echo "<h1>Interpolación</h1>";
      echo 'I\'m';
      echo " ----> {$nombre_completo}";
    ?>
  </body>
</html>
