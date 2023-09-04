<?php
function Conectarse()
{
	//conexion con la base de datos creada en sql
	if (!($link=mysqli_connect("127.0.0.1","root","","bd_artalan"))) //base de datos utilizada con sql
	{
		echo "Error conectando a la base de datos";
		exit();
		}
	/*if (!mysqli_select_db($link,"bd_artalan"))
	{
		echo "Echo seleccionando la base de datos";
		exit();
	}*/
    return $link;
}
?>