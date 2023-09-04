<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--uso de los estilos de css-->
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
            <li><a href="caballeros.php" class="nav-link">CABALLEROS</a></li>
            <li><a href="damas.php" class="nav-link">DAMAS</a></li>
            <li><a href="formato_login.html" class="nav-link">INICIAR SESI&Oacute;N</a></li>
            <li><a href="index.html" class="nav-link">REGRESAR</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">

<div class="container">
    <h2>REG&Iacute;STRATE AHORA</h2>
    <p>S&Oacute;LO LLENA LOS CAMPOS SOLICITADOS Y CON UN SIMPLE CLICK ESTAR&Aacute;S DENTRO</p>
</div>
</main>
<!--Agregar a los clientes-->
	<form action="agrega_cliente.php" method="post">
	<div><table class="registro">
		<tr>
			<td> Nombre: </td>
			<td> <input type="text" name="nombre" placeholder="obligatorio" required></td>
		</tr>
		<tr>
			<td>Apellido Paterno: </td>
			<td><input type="text" name="apellido_paterno" placeholder="obligatorio" required></td></tr>
		<tr>
			<td>Apellido Materno: </td>
			<td><input type="text" name="apellido_materno"></td></tr>
		<tr>
			<td>Tel&eacute;fono: </td>
			<td><input type="text" name="telefono" placeholder="obligatorio" required></td></tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" placeholder="obligatorio" required></td></tr>
		<tr>
			<td>Usuario: </td>
			<td><input type="text" name="usuario" placeholder="Crea tu nombre de usuario" required></td></tr>
        <tr>
            <td>Contrase&ntilde;a: </td>
            <td><input type="password" name="contrasena" placeholder="&#128272; Nueva contrase&ntilde;a" required></td></tr>
		<tr>
            <td></td>
			<td><input type="submit" value="Registrarse">
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