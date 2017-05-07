<?php
    require_once "API/models/persona.php";
    Models\Persona::Hola(); //para invocar la función necesitamos escribir el namespace seguido del nombre de la función
/*
    Los nombres de espacios nos ayudan a tener que colocar "sub-nombres" a nuestros archivos,
    clases o funciones
*/
    echo "<br />";
    require_once "API/controllers/PersonasController.php"; //para evitar esto se recurre a autoload
    Controllers\Persona::Hola();
?>
