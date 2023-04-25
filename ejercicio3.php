<?php

for ($i = 1; $i <= 30; $i++){
  if ($i % 2 === 0){
    $tipo = "Par";
  } else {
    $tipo = "Impar";
  }
  echo "El cuadrado de: ".$i." es: ".$i*$i." este cuadrado es ".$tipo."<br/>";
}