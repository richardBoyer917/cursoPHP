<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo_for</title>
    <link rel="stylesheet" type="text/css" href="for.css" />
  </head>
  <body>
    <div class="res">
      <h2>RESULTADO</h2>
      <?php
        for ($i=$_GET['n1']; $i <= $_GET['n2']; $i++) {
          echo $i."<br />";
        }
      ?>
    </div>
  </body>
</html>
