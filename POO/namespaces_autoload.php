<?php
    spl_autoload_register(function($clase) {
        $ruta = "API/" . str_replace("\\", "/", $clase) . ".php";
        if(is_readable($ruta)) {
            require_once $ruta;
        }
        else {
            echo "El archivo no existe <br />";
        }
    });

    //Es una forma en la que se trabaja en los frameworks
    //se usa str_replace ya que la diagonal invertida es un problema haha
    Models\Persona::Hola();
    echo "<br />";
    Controllers\PersonasController::Hola();
?>
