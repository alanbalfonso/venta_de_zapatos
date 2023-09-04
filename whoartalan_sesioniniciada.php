<?php
    //inicio de sesion
    session_start();
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Qui&eacute;nes somos</title>
</head>
<body>
    <header class="header">
        <div class="container logo-nav-container">
        <img src="imagenes/Artalan_logo.png" alt="logo"/>
            <a href="index_sesioniniciada.php" class="logo">ARTALAN</a>
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
<!--seccion de quienes somos con la sesion iniciada-->
    <main class="main">
        <div class="container">
            <h1>¿QUI&Eacute;NES SOMOS?</h1>
            <section class="whoartalan"><img src="imagenes/Artalan_logo.png"/></td></section>
            <section class="whoartalan"><p>Zapater&iacute;as Artalan es una empresa/proyecto que se encarga en distribuir diferentes tipos de calzado para distintos clientes alrededor del mundo, nuestro objetivo es vender los distintos calzados a un precio barato para que estos sean accesibles para todo el mundo. As&iacute; es como Zapater&iacute;as Artalan busca el mejor calzado para ti.</p></section>
            </table>
    </main>
    <footer class="footer-sesion">
        <div class="container">
            <p>Desarrollado por <a href="https://msng.link/o/?alanbauza_=ig">Alan Bauza</a> y <a href="https://msng.link/o/?arturopp_=ig">Jos&eacute; Arturo Palomera</a></p>
            <p>Hecho en: 2022</p>
        </div>
    </footer>
    <!--scripts utilizados-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js
    "></script>
    <script src="scripts.js"></script>
</body>
</html>