<?php 

include('app/config.php');

session_start();
if(isset($_SESSION['usuario_sesion'])){
    //echo "existe sesion";
    ?>
    
    <?php
}else{
    //echo "Para ingresar necesita iniciar session";
}

//echo "Bienvenido Admininstrador";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <?php include('layout/admin/head.php');?>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<?php include('layout/admin/menu.php');?>

  <div class="content-wrapper">
    BIENVENIDO ADMINISTRADOR


    </div>
    <?php include('layout/admin/footer.php');?>
</div>
<?php include('layout/admin/footer_link.php');?>
</body>
</html>
