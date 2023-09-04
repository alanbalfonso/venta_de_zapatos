<?php
    //codigo de cerrado de sesion y redireccion al index principal
    session_start();
    error_reporting(0);

    session_destroy();
    header('location:index.html');
?>