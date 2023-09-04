<?php
    //inicio de sesion
    session_start();
    error_reporting(0);
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
<header class="header">
        <div class="container logo-nav-container">
        <img src="imagenes/Artalan_logo.png" alt="logo"/>
            <a href="whoartalan_sesioniniciada.php" class="logo">ARTALAN</a>
            <span class="menu-icon">Ver Men&uacute;</span>
        <nav class="navigation">
            <ul>
            <li><a href="index_sesioniniciada.php" class="nav-link">REGRESAR</a></li>
            <li><a href="damas_sesioniniciada.php" class="nav-link">DAMAS</a></li>
            <li><a href="cerrar_sesion.php" class="nav-link">CERRAR SESI&Oacute;N</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">

<!--seccion de caballeros con la sesion iniciada-->
<div class="container">
	<h1>CABALLEROS</h1>
	<section class="tenis"><img src="imagenes/caballero/revolution5.jpg" alt="revolution"/><h2>REVOLUTION 5</h2><p>$2400</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
	<section class="tenis"><img src="imagenes/caballero/vestir.jpg" alt="vestir"/><h2>ZAPATOS DE VESTIR</h2><p>$2800</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
	<section class="tenis"><img src="imagenes/caballero/galaxy6.jpg" alt="galaxy"><h2>GALAXY 6</h2><p>$2300</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
	<section class="tenis"><img src="imagenes/caballero/old_skool.jpg" alt="old_skool"><h2>VANS OLD SKOOL</h2><p>$1800</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
	<section class="tenis"><img src="imagenes/caballero/trae_young.png" alt="trae_young"><h2>ADIDAS TRAE YOUNG</h2><p>$3000</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
	<section class="tenis"><img src="imagenes/caballero/Chuck_Taylor.png" alt="chuck_taylor"><h2>CONVERSE CHUCK TAYLOR</h2><p>$2200</p><a href="datos_envio.php"><input type="button" value="COMPRAR"></a></section>
</div>

</main>
<footer class="footer">
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