<?php

  class Student {
    public $name = "David";
    public function speak($mess) {
      echo $mess;
    }
  }

  $david = new Student();
  //echo $david->$name;
  echo $david -> name;
  echo "<p></p>";
  echo $david->speak("Hola mundo");

?>
