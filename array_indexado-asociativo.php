<?php
  //Array indexado
  $usuario = "dbetm";
  $arrayIndex = array(1,2,"David",$usuario);
  for ($i = 0; $i < count($arrayIndex); $i++) {
    echo $arrayIndex[$i]."</br>";
  }

  //Array asociativo
  $arrayAsociativo = array('Nave' => 'G-707', 'Programa' => 'NASAX', 'Mes' => 'Enero');

foreach ($arrayAsociativo as $key => $value):
  echo "Clave: $key < --- > Valor: $value";
  echo "</br>";
endforeach;


 ?>
