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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet"/>
    <title>Registro</title>
</head>
<script type="text/javascript" src="funciones.js"></script>
<body>
<header class="header">
        <div class="container logo-nav-container">
        <img src="imagenes/Artalan_logo.png" alt="logo"/>
            <a href="whoartalan.html" class="logo">ARTALAN</a>
            <span class="menu-icon">Ver Men&uacute;</span>
        <nav class="navigation">
            <ul>
            <li><a href="caballeros_sesioniniciada.php" class="nav-link">CABALLEROS</a></li>
            <li><a href="damas_sesioniniciada.php" class="nav-link">DAMAS</a></li>
            <li><a href="cerrar_sesion.php" class="nav-link">CERRAR SESI&Oacute;N</a></li>
            <li><a href="index_sesioniniciada.php" class="nav-link">REGRESAR</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">

<div class="container">
    <h2>YA CASI TERMINAMOS</h2>
    <p>S&Oacute;LO LLENA LOS CAMPOS SOLICITADOS Y CON UN SIMPLE CLICK LLEGAR&Aacute; TU PRODUCTO HACIA TU CASA LO M&Aacute;S R&Aacute;PIDO POSIBLE.</p>
</div>
</main>
<!--Datos de envio-->
	<form action="agregar_direccion.php" method="post">
	<div><table class="registro">
		<tr>
			<td> Pa&iacute;s: </td>
			<td> <input type="text" name="pais" placeholder="obligatorio" required></td></tr>
		<tr>
			<td> Ciudad: </td>
			<td><input type="text" name="ciudad" placeholder="obligatorio" required></td></tr>
		<tr>
			<td> C&oacute;digo postal: </td>
			<td><input type="text" name="c_p" placeholder="obligatorio" required></td></tr>
		<tr>
			<td> Colonia: </td>
			<td><input type="text" name="colonia"></td></tr>
        <tr>
            <td> Descripci&oacute;n: </td>
            <td><input type="text" name="descripcion" placeholder="(max 100 palabras)"></td></tr>
        <tr>
            <td> Nombre de usuario: </td>
            <td><input type="text" name="ussername" placeholder="obligatorio" required></td></tr>
		<tr>
            <td></td>
			<td><input type="submit" value="COMPRAR">
        </td>
		</tr>
	</table>
    </div>
</form>	
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