<?php

$nEnteros = array(
  101,
  22,
  34,
  45,
  505,
  22,
);
echo "<h2>Recorrer y mostrar</h2>";
foreach ($nEnteros as $enteros){
  echo $enteros."<br/>";
}

echo "<h2>Ordenar y mostrar</h2>";
sort($nEnteros);
foreach ($nEnteros as $enteros){
  echo $enteros."<br/>";
}

echo "<h2>Longuitud</h2>";
echo count($nEnteros)."<br/>";
echo sizeof($nEnteros);

echo "<h2>Buscar</h2>";

if (array_search(22, $nEnteros)){ //array_search devuelve el elemento, pero si hay mas de uno devuelve el primero
  echo "El numero 22 esta en el array <br/>";
}else{
  echo "El numero 22 no esta en el array <br/>";
}

if (in_array(22, $nEnteros)){ //in_array devuelve true o false
  echo "El numero 22 esta en el array <br/>";
}else{
  echo "El numero 22 no esta en el array <br/>";
}