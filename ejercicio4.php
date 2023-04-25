<meta charset="utf-8" />
<?php
$contador = 1;
$numero = 1;
while ($contador <= 20) {
  echo $numero."<br/>";
  $numero*=$contador;
  $contador++;
}

echo "El resultado es: ".$numero;