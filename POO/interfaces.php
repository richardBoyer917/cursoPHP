<?php
    interface Auto {
      //Los métodos deben ser públicos
      public function encender();
      public function apagar();
    }

    interface Gasolina extends Auto {
      public function vaciar();
      public function llenar($cant);
    }

    //La clase debe contener todos los métodos definidos en la interface

    class Deportivo implements Gasolina {
      private $estado = false;
      private $tanque = 0;

      public function estado() {
        if($this->estado) print "El auto está encendido, y tiene: ".$this -> tanque." litros <br />";
        else print "El auto está apagado <br />";
      }

      public function encender() {
        if($this->estado) print "No se puede encender el auto dos veces<br />";
        else {
          if($this -> tanque <= 0) print "No se puede encender (tanque vacío) <br />";
          else {
            print "Auto encendido<br />";
            $this -> estado = true;
          }
        }
      }

      public function apagar() {
        if($this->estado) {
          print "Auto apagado <br />";
          $this -> estado = false;
        }
        else print "El auto ya está apagado <br />";
      }

      public function vaciar() {
        $this -> tanque = 0;
      }

      public function llenar($cant) {
        $this -> tanque = $cant;
      }

      public function usar($km) {
        if($this -> estado) {
          $reducir = $km / 3;
          $this -> tanque = $this -> tanque - $reducir;
          if($this -> tanque <= 0) $this -> estado = false;
        }
        else print "El auto está apagado y no se puede usar<br />";
      }
    }

    $obj = new Deportivo();
    $obj ->llenar(12);
    $obj-> encender();
    $obj -> estado();
    $obj -> usar(36);
    $obj -> estado();
?>
