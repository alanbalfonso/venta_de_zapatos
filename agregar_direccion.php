<?php
//entrada de datos de direccion del usuario para guardarlos en la base de datos
$Pais=$_POST["pais"];	//$variable=$_POST(metodo)["nombre_variable_en_pagina"]
$Ciudad=$_POST["ciudad"];
$COD_POS=$_POST["c_p"];
$Colonia=$_POST["colonia"];
$Descripcion=$_POST["descripcion"];
$Ussername=$_POST["ussername"];

//inclusion del conex para entrar en la base de datos de sql
Include("Conex.php");
$link=Conectarse();
$sql="Insert into datos_envio (id_envio, pais, ciudad, c_p, colonia, descripcion, username) values ('', '$Pais', '$Ciudad', '$COD_POS', '$Colonia', '$Descripcion', '$Ussername')";

//redireccion a la sesion iniciada una vez entren los datos
ECHO $sql;
mysqli_query($link,$sql);
mysqli_close($link);
header("Location: index_sesioniniciada.php")

?>