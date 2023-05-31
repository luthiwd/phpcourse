<?php

for ($count = 1; $count <= 100; $count++) {
  if ($count % 2 === 0) {
    $tipo = "Par";
    echo "El numero ".$count." es ".$tipo."<br/>";
  }
}