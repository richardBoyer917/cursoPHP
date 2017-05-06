<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Autoload</title>
  </head>
  <body>
    <?php
      function autoload($clase) {
        include "autoload/" . $clase . ".php";
      }
      spl_autoload_register('autoload'); //busca los archivos auto.php y persona.php y los carga con la función autoload

      //Lo que hace autoload es cargar las clases una vez que se solicitan
      //con su nombre

      auto::mostrar("Hola Mundo"); //'auto', hace referencia al acrchivo 'auto.php' de la carpeta autoload/
      persona::mostrar("Soy una piedra que habla, ah y tiene ojos");
    ?>
  </body>
</html>
