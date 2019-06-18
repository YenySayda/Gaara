<?php

$id=$_REQUEST['id'];
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
$pdo->query("UPDATE registro
            SET     nombre='$nombre',
                    sexom='$sexom',
                    actividad='$actividad',
                    edad='$edad',
                    tam='$tam',
                    foto='$destino',
                    nombrep='$nombrep',
                    apellidosp='$apellidosp',
                    correo='$correo',
                    telefono='$telefono'
                    distrito='$distrito',
            WHERE   id = '$id'");

header("Location: adopcion.php");
?>