<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificadores de acceso</title>
  </head>
  <body>
    <?php
        class Facebook {
          //Atributos
          public $name;
          public $age;
          private $pass;
          //Métodos
          public function __construct($name, $age, $password) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> pass = $password;
          }
          public function ShowInfo() {
            echo "Nombre: " . $this -> name . "<br />";
            echo "Edad: " . $this -> age . "<br />";
            //changePass("hey 1234jhdh"); //Así llamaría el método changePass
            echo "Contraseña: " . $this -> pass;
          }
          private function changePass($newPass) { //para que funcione este método debe ser llamado desde otro método de esta clase
            $this -> pass = $newPass;
          }
        }
        $nuevoUsuario = new Facebook("Light", 19, "es _532 frda");
        $nuevoUsuario -> ShowInfo(); //funcionará sin problemas pues pass está siendo usada dentro de un método de la
        //misma clase, aquí sólo lo estamos llamando.
        echo "<p> </p>";
        echo $nuevoUsuario -> name; //Sí puedo
        echo $nuevoUsuario -> pass; //No puedo acceder a dicho atributo por ser de tipo private
        //protected tampoco se puede
        $nuevoUsuario -> changePass("hola"); // no se puede acceder a un método private desde el 'objeto'
     ?>
  </body>
</html>
