<?php 

include('app/config.php');

session_start();
if(isset($_SESSION['usuario_sesion'])){
    echo "existe sesion";
    ?>
    <a href="<?php echo $URL;?>/login/cerrar_sesion.php">CERRAR SESSION</a>
    <?php
}else{
    echo "Para ingresar necesita iniciar session";
}


//echo "Bienvenido Admininstrador";

?>