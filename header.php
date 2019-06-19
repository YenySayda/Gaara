<div class="menu">
        <ul>
        <?php if(isset($_SESSION["correo"])) {?>
            
            <li><a href="index.php"><strong>HOME</strong> </a> </li>
            <li><a href="reportar.php"><strong>REPORTE DE MASCOTAS</strong> </a></li>
            <li><a href="adopcion.php"><strong>ADOPCIÓN DE MASCOTAS</strong></a></li>
            <li class="a4"><a href="esteril.php"><strong>ESTERILIZACIÓN DE MASCOTAS</strong></a></li>
            <li><a href="cerrar.php"><strong>CERRAR</strong> </a></li>

        <?php }else{ ?>
            <li><a href="index.php"><strong>HOME</strong> </a> </li>
            <li><a href="iniciar.php"><strong>INICIAR SESIÓN</strong> </a></li>
            <li><a href="crearCuenta.php"><strong>REGISTRARSE</strong> </a></li>
        <?php } ?>

        </ul> 

</div>
