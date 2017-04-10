<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cast</title>
  </head>
  <body>
    <?php
      echo "<h1> CONVERSIÓN DE TIPOS DE DATOS </h1>";

      echo "<h2>Conversión a enteros </h2>";

      echo "<h3> Contexto </h3>";
      $var = "20 holas mundos";
      $suma = 20 + $var;
      echo $suma;
      echo "<p> </p>";
      echo gettype($suma);

      echo "<h3> Forzado de tipo </h3>";
      $int=(int)$var;
      echo $int;
      echo "<p> </p>";
      echo gettype($int);

      echo "<h3> Función </h3>";
      $var2 = 8.16;
      $function = intval($var2);
      echo $function;
      echo "<p> </p>";
      echo gettype($function);

      echo "<h2>Conversión a tipo float o double </h2>";

      echo "<h3> Forzado de tipo </h3>";
      $var = "10.6 H";
      $numReal = (float) $var;
      echo $numReal;
      echo "<p> </p>";
      echo gettype($numReal);

      echo "<h3> Función </h3>";
      $funcionReal = floatval($var);
      echo $funcionReal;

      echo "<h2>Conversión a tipo booleano</h2>";
      $variable = 12;
      $variable2 = 0.0;
      $boolean = (boolean)$variable;
      $bool = boolval($variable2);
      echo $boolean;
      echo $bool;

      echo "<h2>Conversión a tipo array</h2>";

      echo "<h3> Función explode </h3>";
      $numeros = "1, 2, 3, 4";
      $arrayNumeros = explode(",",$numeros, 5);
      echo $arrayNumeros[0];
      echo $arrayNumeros[1];

      echo "<h3> Tipo forzado </h3>";
      $variable = 12;
      $array = (array)$variable;
      echo $array[0];

      echo "<h3> De array a string </h3>";
      $arrayColores = array('azul','rojo','morado');
      $string = implode(".", $arrayColores);
      echo $string;
    ?>
  </body>
</html>
