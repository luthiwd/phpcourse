<?php
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "Tu IP es: ".$ip."<br/>";

if (strstr($browser, "Firefox")){
  echo "Tu navegador es Firefox";
}else{
  echo "Tu navegador no es Firefox";
}
