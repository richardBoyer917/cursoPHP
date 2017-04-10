<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3. Operadores</title>
  </head>
  <body>
    <?php
      $n1 = 13;
      $n2 = "13";

      echo "<h3>Operador igual</h3>";
      var_dump($n1 == $n2);

      echo "<h3>Operador idéntico</h3>";
      var_dump($n1 === $n2);

      echo "<h3>Operador diferente</h3>";
      var_dump($n1 <> $n2);

      echo "<h3>Operador no idéntico '!==' </h3>";
      echo "<h3>Otros operadores</h3>";

      echo
      "<ol>
        <li> Mayor que > </li>
        <li> Menor que < </li>
        <li> Mayor o igual que >= </li>
        <li> Menor o igual que <= </li>

      </ol>";

      echo "<h3>Operador de Elvis</h3>";
        $resultado = true;
        var_dump($resultado?:'No hay datos');
        $resultado = false;
        echo "<p></p>";
        var_dump($resultado?:'No hay datos');

      echo "<h3>Operador ternario</h3>";
        $res = 13;
        var_dump($res?'Soy verdadero':'Soy falso');
        echo "<p></p>";
        $res = 0;
        var_dump($res?'Soy verdadero':'Soy falso');

      echo "<h3>Operador de fusión null </h3>";
        /* $res2;
        var_dump($res2?'No hay datos');
        */
    ?>
  </body>
  </html>
