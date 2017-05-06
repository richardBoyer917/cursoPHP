<?php
  trait Persona2 { //un trait no se puede llamar igual que una clase
    public $nombre;

    public function mostrarNombre() {
      echo $this -> nombre;
    }

    abstract function asignarNombre($nombre); //método abtracto que debe implementar la clase que use el trait
  }

  trait Trabajador {
    protected function mensaje() { //para usar este método será necesario llamarlo desde la misma clase (desde otra función)
      return "Mi nombre es: ";
    }
    public function complemento() {
      return " y soy trabajador <br />";
    }
  }
  class Persona {
    use Persona2, Trabajador;
    public function asignarNombre($nombre) {
      $this -> nombre = self::mensaje() . $nombre . $this->complemento(); //usando propiedades de ambos traits
    }

    //por orden de preferencia los métodos de la clase tiene cierta prioridad sobre lo de los traits
    //un ejemplo sería tener un método con el mismo nombre en algun trait y en la clase
    //si lo mandamos llamar desde el objeto ya instancia entonces se ejecutará el método de la clase
  }

  $persona = new Persona();
  $persona -> asignarNombre("Javier");
  $persona -> mostrarNombre();
/*
  Fragmentos de código que pueden ser reusados en clases, los cuales pueden tener un poco de similitud
  con una clase.
  Las clases pueden permitir usar tantos traits como sean posibles simplemente separándolos con una coma.
  - Es similar a una clase
  - Tiene como objetivo agrupar funcionalidades muy específicas,
  - es por tanto un añadido a la herencia tradicional.
  - Permite combinar miembros de clases sin tener que usar la herencia (buena idea :D).
*/
?>
