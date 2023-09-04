<?php
//inicio de sesion
    session_start();
    $_SESSION['session']= $usuario;
    header("location:index_sesioniniciada.php");
?>