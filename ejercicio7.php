<?php

$meses = array(
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
);

foreach ($meses as $index => $mes){
  $index = $index + 1;
  echo 'El indice '.$index.' '.$mes."<br/>";
}