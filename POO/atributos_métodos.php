<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
  </head>
  <body>
    <?php
      class Persona {
        //atributos
        public $name = array();
        public $lastname = array();
        //métodos
        public function save($name, $lastname) {
          $this -> name[] = $name;
          $this -> lastname[] = $lastname;
        }
        public function show() {
          for ($i=0; $i < count($this -> name); $i++) {
            $this -> format($this -> name[$i], $this -> lastname[$i]);
          }
        }
        public function format($name, $lastname) {
          echo "Nombre: " . $name . "<br />";
          echo "Apellido: " . $lastname . "<br />";
        }
      }

      $cliente = new Persona();
      $cliente -> save("David", "Betancourt");
      $cliente -> save("Gabriel", "Hernández");
      $cliente -> show();
    ?>
  </body>
</html>
