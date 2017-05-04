<?php
    class Page {
      //Attributes
      public $name = "Dindel";
      public static $url = "www.dindel.com.mx";
      //Methods
      public function welcome() {
        echo "Bienvenidos a <b>".$this -> name."</b> <br />";
        echo "La página es: <b>".$this -> url."</b><br />";
        //atributos estáticos no pueden ser accedidos por otro método con el operador $this ->
        echo self::$url."<br />";
        //en cambio usando el operador ::, con self o bien Page::$url, se puede
      }

      //si el método es static se puede llamar sin instanciar, sin embargo, este no tiene acceso
      //a los atributos de la clase...
      public static function welcome2() {
        echo "Bienvenidos a: " . self::$url; //se puede porque url es de tipo estático
        echo "Bienvenidos a: " . $this -> name; // no se muestra nada pues no puede acceder al atributo
      }
    }

    $page = new Page();
    $page -> welcome();

    //sin instanciar
    Page::welcome2();
?>
