<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Herencia</title>
  </head>
  <body>
    <?php
        class Vehiculo {
          //Atributos
          public $motor = false;
          public $marca;
          public $color;
          //Métodos
          public function estado() {
            if($this -> motor) echo "Está encendido<br />";
            else echo "El motor está apagado <br />";
          }
          public function encender() {
            if($this-> motor) echo "CUIDADO: el motor ya está encendido<br />";
            else {
              $this -> motor = true;
              echo "El motor se ha encendido <br />";
            }
          }
        }
        echo "<p>VEHÍCULO</p>";
        $vehiculo = new Vehiculo();
        $vehiculo -> estado();
        $vehiculo -> encender();
        $vehiculo -> estado();

        class Moto extends Vehiculo {
          public $altura;

          public function __construct($altura) {
            $this -> altura = $altura;
          }

          public function estadoMoto() {
            self::estado();
          }
        }

        echo "<p>MOTO</p>";
        $moto = new Moto(45);
        $moto -> estadoMoto();
        $moto -> encender();
        $moto -> estado();
        echo "La altura de la moto es: ".$moto -> altura . "<br />";

        class Cuatrimoto extends Moto {

        }
        echo "<p>CUATRIMOTO</p>";
        $cuatri = new Cuatrimoto(5); //Cuatrimoto hereda propiedades (métodos y atributos) de Moto y por ende de Vehículo
        $cuatri -> encender();
        $cuatri -> estado();
        echo "La altura de la moto es: ".$cuatri -> altura . "<br />";
    ?>
  </body>
</html>
