<?php
$nom = $_POST["nombres"];
$apel = $_POST["apellidos"];
$cor = $_POST["correo"];
$pasw = $_POST["password1"];
$paswD = $_POST["password2"];

$validar = true;

if($pasw != $paswD){
    $validar = false;
    
}
else{
    $pdo = new PDO("mysql:host=localhost;dbname=prueba;charset=utf8", "root", "");
    $pasw = sha1($pasw);
    $pdo->query("INSERT INTO crearcuenta VALUES (null, '$nom', '$apel', '$cor', '$pasw')");
}
if($validar == false) {
    header("Location: crearCuenta.php?error1=ddgg");
}
else{
    header('Location: index.php');
}
?>
