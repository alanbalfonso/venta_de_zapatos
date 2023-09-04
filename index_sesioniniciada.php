<?php
    //inicio de sesion
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="styles.css" rel="stylesheet"/>
    <title>Zapater&iacute;a Artalan</title>
</head>
<body>
    <!--entrada de pestañas donde esta iniciada la sesion-->
<header class="header">
        <div class="container logo-nav-container">
        <img src="imagenes/Artalan_logo.png" alt="logo"/>
            <a href="whoartalan_sesioniniciada.php" class="logo">ARTALAN</a>
            <span class="menu-icon">Ver Men&uacute;</span>
        <nav class="navigation">
            <ul>
            <li><a href="caballeros_sesioniniciada.php" class="nav-link">CABALLEROS</a></li>
            <li><a href="damas_sesioniniciada.php" class="nav-link">DAMAS</a></li>
            <li><a href="cerrar_sesion.php" class="nav-link">CERRAR SESI&Oacute;N</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">

<div class="container">
    <h1>BIENVENIDO A ARTALAN</h1>
    <p>DESCUBRE NUESTRAS PROMOCIONES Y PRODUCTOS M&Aacute;S VENDIDOS</p>
</div>
</main>
<div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section"><a href="caballeros_sesioniniciada.php"><img src="imagenes/caballero/Chuck_Taylor.png" alt="" class="slider__img"/></a></div>
            <div class="slider__section"><a href="damas_sesioniniciada.php"><img src="imagenes/dama/All_Star.png" alt="" class="slider__img"/></a></div>
            <div class="slider__section"><a href="caballeros_sesioniniciada.php"><img src="imagenes/caballero/old_skool.jpg" alt="" class="slider__img"/></a></div>
            <div class="slider__section"><a href="damas_sesioniniciada.php"><img src="imagenes/dama/sperry.png" alt="" class="slider__img"/></a></div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>
        <footer class="footer">
        <div class="container">
            <p>Desarrollado por <a href="https://msng.link/o/?alanbauza_=ig">Alan Bauza</a> y <a href="https://msng.link/o/?arturopp_=ig">Jos&eacute; Arturo Palomera</a></p>
            <p>Hecho en: 2022</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js
    "></script>
    <script src="scripts.js"></script>
</body>
</html>