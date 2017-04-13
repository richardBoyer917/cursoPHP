<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar de un número</title>
  </head>
  <body>
    <?php
      mostrar($_GET['n']);

      function mostrar($nums) {
        $i = 1;
        $CONS = 10;
        while($i <= $CONS):
          $res = $i * $nums;
          echo $i. " x ".$nums." = ".$res."<br />";
          $i++;
        endwhile;
      }
    ?>

  </body>
</html>
