<?php
    /*
    * Aplicación tipo lotería donde le indicamos un número aleatorio
    * y la cantidad de intentos, esta debe mostrar los intentos y al
    * final debe mostrar un mensaje si ganó o no el concursante.
    */
    class Loteria {
      //atributos
      public $intentos;
      public $numero;
      public $resultado = false;
      //métodos
      public function __construct($numero, $intentos) {
        $this -> intentos = $intentos;
        $this -> numero = $numero;
      }

      public function sortear() {
        $min = $this -> numero / 2;
        $max = $this -> numero * 2;
        for ($i=0; $i < $this -> intentos; $i++) {
          $intent = rand($min, $max);
          self::intentos($intent);
          if($this -> resultado == true) {
            $this -> intentos = $i+1;
            break;
          }
        }
      }

      public function intentos($intent) {
        if($intent == $this -> numero) {
            echo "<b>". $intent . "==" . $this -> numero ."</b> <br />";
            $this -> resultado = true;
        }
        else {
            echo $intent . "!=" . $this -> numero ."<br />";
        }
      }

      public function __destruct() {
        if($this -> resultado) {
          echo "Felicidades has ganado en: " . $this -> intentos . " intentos <br />";
        }
        else echo "Has fallado en: " . $this -> intentos . " intentos <br />";
      }
    }

    $loteria = new Loteria(12, 5);
    $loteria -> sortear();
?>
