<?php
$array = array("Morado","Verde", "Azul");
foreach ($array as &$value) {
  $value .= " es un color";
}
foreach ($array as $key => $value2) {
  echo "$key ... $value2";
  echo "<p></p>";
}
?>
