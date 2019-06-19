<?php 
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=prueba;charset=utf8", "root", "");

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
    <style>
        .divA{
            display: flex; 
            border: red 5px dotted; 
            width: 500px; 
            margin:auto;
        }
        .divB, .divAB {
            background-color: #000;
           /* width:240px;*/
            flex-grow: 1;
            
            
        }

        .divB{
            padding: 2px 5px;
            color: white;
           
        }
        .bot1, .bot2{
            background: crimson;
            color:#fff;
            cursor: pointer;
        }

        .botDD1, .botDD2{
         
            margin:auto;
        }
        .botDD{
            width:320px;
            display:  flex;
            /*border: solid green 2px;*/
        }

        .bot1{
            padding: 10px 30px;
        }
        .bot2{
            padding: 10px 20px;
        }
        .bot1, .bot2:active{
            transform:scale(1.05)
        }
    </style>
 
</head>
<body class="general">

<header><?php include 'header.php' ?></header>

<h1>MASCOTAS EN ADOPCIÓN</h1>
<?php foreach ($pdo->query("SELECT * FROM registro ORDER BY ID DESC") as $respuesta){?>

    <div  class="divA">
        <div class="divAB">
            <img src="<?php echo $respuesta["foto"] ?>" alt="" width="320px" height="280px" style="">
            <div class="botDD">
                <div class="botDD1">         
                    <form action="borrar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $respuesta["id"] ?>">
                        <button type="submit" class="bot1">Borrar</button>
                    </form>
                </div>
                <div class="botDD2">
                    <form action="modificar.php?id=<?php echo $respuesta["id"] ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $respuesta["id"] ?>">
                        <button type="submit" class="bot2">Modificar</button>
                        <strong></strong>
                    </form> 
                </div> 
            </div>
        </div>
        <div class="divB">

            <p style="font-size:12px;"><?php echo '<strong>Nombre  :</strong>  '.$respuesta["nombre"] ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Raza:  </strong>'.$respuesta["raza"] ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Sexo:  </strong>'.$respuesta["sexom"] ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Actividad:  </strong>'.$respuesta["actividad"] ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Edad:  </strong>'.$respuesta["edad"].'meses' ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Tamaño:  </strong>'.$respuesta["tam"].'cm' ?></p>
            <p style="font-size:12px;"><?php echo '<strong>Contactos:  </strong>'.$respuesta["nombrep"].'   '.$respuesta["apellidosp"]?></p>
            <p style="font-size:12px;"><?php echo '<strong>correo:  </strong>'.$respuesta["correo"] ?></p>
            <p style="font-size:12px;"><?php echo '<strong>telefono:  </strong>'.$respuesta["telefono"]?></p>
            <p style="font-size:12px;"><?php echo '<strong>distrito: </strong>'.$respuesta["distrito"] ?></p>

        
  
        </div>
    </div>

 
    <?php }?>


    <footer><?php include 'footer.php' ?></footer>
</body>
</html>