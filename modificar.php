<?php
$id=$_POST["id"];
$pdo = new PDO("mysql:host=localhost;dbname=prueba;charset=utf8", "root", "");
$resultado2 = $pdo->query("SELECT * FROM registro WHERE id ='$id'");
$reporte= $resultado2->fetch();
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

    <h1>MODIFICAR FORMULARIO</h1>

    <form action="procesarM.php" method="post" class="formulario" enctype="multipart/form-data">
    <div class=formul2>
        <h1>Información de Mascota</h1>
        
            <input type="text" name="nombrem" placeholder="Nombre de la Mascota" required class="input100" value="<?php echo $reporte["nombre"] ?>">
            <input type="text" name="raza" id="" placeholder="raza" required class="input100" value="<?php echo $reporte["raza"] ?>"">
        
		
            <label for="" class="lab">¿Hembra o macho?</label>
			<select name="sexom" id="" required class="input80" value="<?php echo $reporte["sexom"]?>">
                <option value="">seleccionar...</option>
                <option value="hembra">Hembra</option>
                <option value="macho">Macho</option>
            </select>
		
		
		
            <label for="" class="lab">Nivel  de actividad :  </label> 
			<select name="nivel" required class="input80">
                    <option value="<?php echo $reporte["actividad"]?>">Nivel de actividad</option>
                    <option value="nada">Nada activo</option>
                    <option value="poco">Poco activo</option>
                    <option value="activo">Activo</option>
                    <option value="muyAct">Muy activo</option>
            </select>
		
        
        
            <input type="number" name="edad" id="" placeholder="Edad en meses" required class="input50"  value="<?php echo $reporte["edad"]?>">
            <input type="text" name="tam" id="" placeholder="tamaño en cm" required class="input50"  value="<?php echo $reporte["tam"]?>">
        
        <div class="inputD">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="" required value="<?php echo $reporte["foto"]?>" >
        </div>
        
        <h1>Informacion personal</h1>
            <input type="text" name="nombrep" id="" placeholder="Nombre" required class="input50"  value="<?php echo $reporte["nombrep"]?>">
            <input type="text" name="apellidosp" id="" placeholder="Apellidos" required class="input50"  value="<?php echo $reporte["apellidosp"]?>">
            <input type="email" name="correo" id="" placeholder="Correo@" required class="inputc"  value="<?php echo $reporte["correo"]?>">
            <input type="number" name="telefono" id="" placeholder="Telefono" required class="input50"  value="<?php echo $reporte["telefono"]?>">
            
            <select name="distrito" required class="inputd"  value="<?php echo $reporte["distrito"]?>">
                    <option value="">Elija su distrito</option>
                    <option value="AN">ANCÓN</option>
                    <option value="AT">ATE</option>
                    <option value="BA">BARRANCO</option>
                    <option value="BR">BREÑA</option>
                    <option value="CA">CARABAYLLO</option>
                    <option value="CHA">CHACLACAYO</option>
                    <option value="CHO">CHORRILLOS</option>
                    <option value="CI">CIENEGUILLA</option>
                    <option value="CO">COMAS</option>
                    <option value="AG">EL AGUSTINO</option>
                    <option value="ID">INDEPENDENCIA</option>
                    <option value="JM">JESÚS MARÍA</option>
                    <option value="LM">LA MOLINA</option>
                    <option value="LV">LA VICTORIA</option>
                    <option value="L">LIMA</option>
                    <option value="LI">LINCE</option>
                    <option value="OL">LOS OLIVOS</option>
                    <option value="LC">LURIGANCHO-CHOSICA</option>
                    <option value="LUR">LURÍN</option>
                    <option value="MS">MAGDALENA DEL MAR</option>
                    <option value="MI">MIRAFLORES</option>
                    <option value="PA">PACHACÁMAC</option>
                    <option value="PU">PUCUSANA</option>
                    <option value="PL">PUEBLO LIBRE</option>
                    <option value="PP">PUENTE PIEDRA</option>
                    <option value="PH">PUNTA HERMOSA</option>
                    <option value="PN">PUNTA NEGRA</option>
                    <option value="R">RÍMAC</option>
                    <option value="SB">SAN BARTOLO</option>
                    <option value="SBO">SAN BORJA</option>
                    <option value="SI">SAN ISIDRO</option>
                    <option value="SJL">SAN JUAN DE LURIGANCHO</option>
                    <option value="SJM">SAN JUAN DE MIRAFLORES</option>
                    <option value="SL">SAN LUIS</option>
                    <option value="SMP">SAN MARTIN DE PORRES</option>
                    <option value="SM">SAN MIGUEL</option>
                    <option value="SA">SANTA ANITA</option>
                    <option value="SMM">SANTA MARÍA DEL MAR</option>
                    <option value="SR">SANTA ROSA</option>
                    <option value="SS">SANTIAGO DE SURCO</option>
                    <option value="SUR">SURQUILLO</option>
                    <option value="VS">VILLA EL SALVADOR</option>
                    <option value="VMT">VILLA MARIA DEL TRIUNFO</option>
                </select>
   
        


    <input type="submit" value="Guardar" class="bot">

    </div>
    </form>

    <footer><?php include 'footer.php' ?></footer>
</body>
</html>