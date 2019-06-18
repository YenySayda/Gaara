<?php

$pdo = new PDO("mysql: host=localhost;dbname=prueba;charset=utf8", "root", "");
$pdo->query("DELETE FROM registro
            WHERE   id = '$id'");

header("Location: adopcion.php");
?>