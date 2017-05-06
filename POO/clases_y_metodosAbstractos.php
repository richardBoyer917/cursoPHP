<?php
  abstract class Template { //Las clases abstractas no se pueden instanciar
    abstract public function getName($name);
    abstract public function showName();
  } //los métodos sólo se definen, no se implementan

  class Person extends Template {
    //una clase que hereda de una clase abstracta, está obligada a implementar los métodos que se definieron
    private $message = "Hola a todos!";
    private $name, $username = "elon";

    public function showMessage() {
      print $this -> message . "<br />";
    }
    public function getName($name) {
      $this -> name = $name . " @" . $this -> username;
      echo $username;
    }
    public function showName() {
      print $this -> name . "<br />";
    }
  }

  $obj = new Person();
  $obj -> showMessage();
  $obj -> getName("Hero");
  $obj -> showName();
/*
Clases Abstractas:

1) Podes tener Atributos normales como también métodos ya implementados.

2) Una vez heredado de la clase abstracta podes usar esos métodos ya codificados y los atributos dependiendo del modificador de acceso de ellos.

3) La clase abstracta no se puede instanciar (o crear objetos a través de ella). Lo que significa que solo una vez que heredes de ella podras usar esos metodos ya codificados. Al menos que esos metodos sean estaticos.

4) Se deberán codificar todos los métodos abstractos al ser heredado.

5) PHP no permite herencia multiple.

Interfaces:

1) Solo define los metodos que se deberan codificar en las clases que la implementen. No se codifican los métodos. Aqui donde veo una gran diferencia.

2) Se pueden implementar varias interfaces en una clase.
*/
?>
