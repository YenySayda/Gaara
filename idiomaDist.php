<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PÁGINA</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="inicio">
<form action="procesarSelecc.php" method="post">
    <div class="inicio1">
        <h1>¡GAARA LE DA LA BIENVENIDA!</h1>
    </div>

    <div class="inicio2" style="height:300px;">
        <div class="inicio1a">
            <label for="idioma" style="color: #fff;">Idioma:</label>
            <select name="idiomae" id="" style="width:280px; height: 30px; color: #fff;" class="selt" required>
                <option value="" >Elija su idioma</option>
                <option value="ESPAÑOL">ESPAÑOL</option>
                <option value="INGLÉS">INGLÉS</option>
            </select>
        </div>
        
        <div class="inicio1b">
            <label for="distrito" style="color: #fff;">Distrito:</label>
            <select name="distritoe" id=""  style="width:280px; height: 30px; color: #fff;" required class="selt">
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
        </div>
        <button type="submit"  class="bot" style=" margin-top: 35px; margin-left: 220px;"><strong>ENTRAR</strong> </button>
    </div>
</form>
</body>
</html>