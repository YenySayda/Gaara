<?php
$cor = $_POST["correo"];
$pasw = $_POST["password"];

$validar= false;
$pasw = sha1($pasw);

$pdo = new PDO("mysql:host=localhost;dbname=prueba;charset=utf8", "root", "");

$iniciar= $pdo->query("SELECT * FROM crearcuenta WHERE correo='$cor' AND contraseña='$pasw'");
$cuenta = $iniciar->fetchAll();

if(count($cuenta)==1){
    $validar= true;
    session_start();
    $var= $cuenta[0];
    $_SESSION["correo"] = $var["correo"];
    $_SESSION["nombres"] = $var["nombres"];
    $_SESSION["apellidos"]=$var["apellidos"];
}
if($validar){
    header("Location: index.php");
}
else{
    header("Location: iniciar.php?error=1");
}
?>