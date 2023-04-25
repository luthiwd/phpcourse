<?php



if (isset($_GET["numero"]) && is_numeric($_GET["numero"])){
  $numero = $_GET["numero"];  
}else{
  $numero = 5;
  echo "Número por defecto";
}

echo "<h2>Tabla de multiplicar de ".$numero."<h2/>";
for ($i = 1; $i <= 10; $i++){
echo $i." X ".$numero." = ".($i*$numero)."<br/>";
}

