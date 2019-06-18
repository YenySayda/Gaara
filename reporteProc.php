<?php



$nombre = $_POST["nombrem"];
$raza = $_POST["raza"];
$sexom = $_POST["sexom"];
$actividad = $_POST["nivel"];
$edad = $_POST["edad"];
$tam = $_POST["tam"];

$foto = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];
$destino = "imagenes/". $foto;
copy ($ruta, $destino);


$nombrep = $_POST["nombrep"];
$apellidosp = $_POST["apellidosp"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$distrito = $_POST["distrito"];


$pdo = new PDO("mysql: host=localhost;dbname=prueba;charset=utf8", "root", "");

$pdo->query("INSERT INTO registro VALUES (NULL,'$nombre' , '$raza' , '$sexom', '$actividad' , '$edad' , '$tam' , '$destino' , '$nombrep' , '$apellidosp' , '$correo' , '$telefono' , '$distrito')");
 /*if($pdo){
    $nomp = $_POST["nombrep"];
    $apelp = $_POST["apellidosp"];
    echo 'estimad@'. $nomp .'   ' . $apelp. '   su reporte se  registró satisfactoriamente';
 }*/

header("Location: reportar.php");
?>