<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo_while</title>
  </head>
  <body>
    <?php
      $n = $_GET['num'];
      $i = 1;
      while($i <= $n) {
        echo $i.". ".$_GET['word']."<br />";
        $i++;
      }
    ?>
  </body>
</html>
