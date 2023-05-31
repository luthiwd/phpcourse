<?php

$newArray = array();
echo "<h2>Recorrer y mostrar</h2>";
for ($counter = 0; $counter < 100; $counter++){
//  $newArray[$counter] = $counter;
  array_push($newArray, $counter);
  echo $newArray[$counter]."<br/>";
}

