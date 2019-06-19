<?php

$id = $_POST["id"];

$pdo = new PDO("mysql: host=localhost;dbname=prueba;charset=utf8", "root", "");
$borrar=  $pdo ->query("DELETE FROM registro WHERE id='$id'");

header("Location: adopcion.php");

?>