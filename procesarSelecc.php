<?php

$idioma = $_POST["idiomae"];
setcookie("idioma", $idioma, time() + 60*60*24*7);


$distrito = $_POST["distritoe"];

setcookie("distrito", $distrito , time() + 60*60*24*7); 
header("Location: index.php");
?>
