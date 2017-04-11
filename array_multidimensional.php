<?php
//Numérico indexado
  $personas = array(
    array("Amairani","Lievano",23),
    array("Omar", "Cameras", 22),
    array("Andrea", "Gallegos", 21)
  );

  for ($i = 0; $i < count($personas); $i++) {
    for ($j = 0; $j < count($personas[$i]); $j++) {
      echo "Valor -- > ".$personas[$i][$j]."</br>";
    }
  }
//Mixto
$barcos = array(
  'A' => array("nada","nada", "Barco1"),
  'B' => array("nada", "nada", "nada"),
  'C' => array("Barco2", "nada", "Barco3")
);

foreach ($barcos as $key => $value) {
  for ($ix = 0; $ix < count($value) ; $ix++) {
    echo "Coordenadas --> ".$key."< -- >".$ix." su valor es: ".$value[$ix]."</br>";
  }
}
?>
