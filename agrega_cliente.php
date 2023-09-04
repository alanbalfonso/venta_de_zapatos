<?php

//codigo para agregar clientes dentro de la abse de datos
$Nombre=$_POST["nombre"];	//$variable=$_POST(metodo)["nombre_variable_en_pagina"]
$Ape_pat=$_POST["apellido_paterno"];
$Ape_mat=$_POST["apellido_materno"];
$Telefono=$_POST["telefono"];
$Email=$_POST["email"];
$nom_usu=$_POST["usuario"];
$Contra=$_POST["contrasena"];

//inclusion del conex para el uso de la base de datos
Include("Conex.php");
$link=Conectarse();
$sql="Insert into usuario (id_usu, nombre, apellido_p, apellido_m, telefono, email, contrasena, session) values ('', '$Nombre', '$Ape_pat', '$Ape_mat', '$Telefono', '$Email', '$Contra', '$nom_usu')";

//redireccion a la pagina principal desde la sesion iniciada
ECHO $sql;
mysqli_query($link,$sql);
mysqli_close($link);
header("Location: index_sesioniniciada.php");

?>