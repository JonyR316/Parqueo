<?php

$usuario = $_POST['usuario'];
$password_user = $_POST['password_user'];

//echo $usuario." - ".$password_user;

if($usuario == "jko_wy316@hotmail.com"){
    ?>
    <div class="alert alert-success" role="alert" style="border: 1px solid #ccc;
                                                              margin-bottom: 15px;
                                                              box-shadow: 9px 3px 12px #000;
                                                              margin-top: 15px;">
        USUARIO CORRECTO
        </div>
    <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert" style="border: 1px solid #ccc;
                                                              margin-bottom: 15px;
                                                              box-shadow: 9px 3px 12px #000;
                                                              margin-top: 15px;">
        USUARIO INCORRECTO
        </div>
    <?php
}

?>