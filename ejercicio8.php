<?php

$factorial = 1;


if (isset($_GET["numero"]) && is_numeric($_GET["numero"])){
  $numero= $_GET["numero"];
}else{
  $numero = 5;
  echo "Número por defecto ".$numero."<br/>";
}
  for ($count = 1; $count <= $numero; $count++){
    $factorial *= $count;
  }
  echo "El factorial de ".$numero." es: ".$factorial;

