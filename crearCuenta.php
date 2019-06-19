<?php
$pdo = new PDO("mysql:host=localhost;dbname=prueba;charset=utf8", "root", "");
$dat = $pdo->query("SELECT * FROM crearcuenta");
$cuenta = $dat->fetchALL();
?>
<?php
if(isset($_COOKIE["distrito"])){
    $distrito = $_COOKIE["distrito"]; #leer el valor
    switch ($distrito){  
        case "AN":
        $distrito = "ANCÓN";
            break;
        case "AT":
        $distrito = "ATE";
            break;
        case "BA":
        $distrito = "BARRANCO";
            break;
        case "BR":
        $distrito = "BREÑA";
            break;

        case "CA":
        $distrito = "CARABAYLLO";
            break;
        case "CHA":
        $distrito = "CHACLACAYO";
            break;
        case "CHO":
        $distrito = "CHORRILLOS";
            break;

        case "CI":
        $distrito = "CIENEGUILLA";
            break;
        case "CO":
        $distrito = "COMAS";
            break;
        case "AG":
        $distrito = "EL AGUSTINO";
            break;
        case "ID":
        $distrito = "INDEPENDENCIA";
            break;
     
        case "JM":
        $distrito = "JESÚS MARÍA";
            break;
        case "LM":
        $distrito = "LA MOLINA";
            break;
        case "LV":
        $distrito = "LA VICTORIA";
            break;
        case "L":
        $distrito = "LIMA";
            break;
          
        case "LI":
        $distrito = "LINCE";
            break;
        case "OL":
        $distrito = "LOS OLIVOS";
            break;
        case "LC":
        $distrito = "LURIGANCHO-CHOSICA";
            break;
        case "LUR":
        $distrito = "LURÍN";
            break;
        case "MS":
        $distrito = "MAGDALENA DEL MAR";
            break;
        case "MI":
        $distrito = "MIRAFLORES";
            break;
        case "PA":
        $distrito = "PACHACÁMAC";
            break;
        case "PU":
        $distrito = "PUCUSANA";
            break;
        case "PL":
        $distrito = "PUEBLO LIBRE";
            break;
        case "PP":
        $distrito = "PUENTE PIEDRA";
            break;
        case "PH":
        $distrito = "PUNTA HERMOSA";
            break;
        case "PN":
        $distrito = "PUNTA NEGRA";
            break;
        case "R":
        $distrito = "RÍMAC";
            break;
        case "SB":
        $distrito = "SAN BARTOLO";
            break;
        case "SBO":
        $distrito = "SAN BORJA";
            break;
        case "SI":
        $distrito = "SAN ISIDRO";
            break;
        case "SJL":
        $distrito = "SAN JUAN DE LURIGANCHO";
            break;
        case "SJM":
        $distrito = "SAN JUAN DE MIRAFLORES";
            break;
        case "SL":
        $distrito = "SAN LUIS";
            break;
        case "SMP":
        $distrito = "SAN MARTIN DE PORRES";
            break;
        case "SM":
        $distrito = "SAN MIGUEL";
            break;
        case "SA":
        $distrito = "SANTA ANITA";
            break;
        case "SMM":
        $distrito = "SANTA MARÍA DEL MAR";
            break;
        case "SR":
        $distrito = "SANTA ROSA";
            break;
        case "SS":
        $distrito = "SANTIAGO DE SURCO";
            break;
        case "SUR":
        $distrito = "SURQUILLO";
            break;
        case "VS":
        $distrito = "VILLA EL SALVADOR";
            break;
        case "VMT":
        $distrito = "VILLA MARIA DEL TRIUNFO";
            break;
        default:
            header ("Location: idiomaDist.php");
            exit;
            break;
    }
}

if(isset($_COOKIE["idioma"])){
    $idioma = $_COOKIE["idioma"];
    switch ($idioma){  
    case "ESPAÑOL":
    $idioma = "ESPAÑOL";
        break;
    case "INGLÉS":
    $idioma = "INGLÉS";
        break;
    default:
        header ("Location: idiomaDist.php");
        exit;
        break;
    }
}

else{
    header("Location: idiomaDist.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body class="general">
    <header><?php include 'header.php' ?></header>

    <h1>CREAR CUENTA</h1>
    <?php if(isset($_GET["error1"])) { ?>
        <p style= "color:red ;"><strong>Las Contraseñas no coinciden</strong> </p>
    <?php } ?>
    <form action="procesarC.php" method="post" style="margin:auto; width:500px">
        <div>
        <input type="text" name="nombres" placeholder="Nombres" class="input100" required>
        </div>
        <div>
        <input type="text" name="apellidos" placeholder="Apellidos" class="input100" required>
        </div>
        <div>
        <input type="email" name="correo" placeholder="Correo" class="input100" required>
        </div>
        <div>
        <input type="password" name="password1" placeholder="Contraseña" class="input100" required>
        </div>
        <div>
        <input type="password" name="password2" placeholder="Confirmar contraseña" class="input100" required>
        </div>
        <button type="submit" class="bot">Registrar</button>

    </form>

    <footer><?php include 'footer.php' ?></footer>

</body>
</html>