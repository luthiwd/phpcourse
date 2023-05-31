<h1>Multiplos de <?= $_GET["numero"] ?></h1>

<?php

$numero = [$_GET["numero"]];

for($contador = 1; $contador <= 100; $contador++){
  if (isset($_GET["numero"]) && $contador%$_GET["numero"]==0) {
    echo $contador." es multiplo de ".$_GET["numero"]."<br/>";
  } 
  
}