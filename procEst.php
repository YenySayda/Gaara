<?php
$pdo = new PDO("mysql: host=localhost;dbname=prueba;charset=utf8", "root", "");
/*$id=$_REQUEST['id'];
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

$buscar = $_REQUEST['buscar']
if(empty($buscar()) {
    header("Location: esteril.php");
}
*/

$pdo->query("SELECT * FROM registro");
while 
?>