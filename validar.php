<?php
//validacion de usuario
$usuario=$_POST["session"];
$clave=$_POST["contrasena"];

//conexion con la bd
$conexion=mysqli_connect("localhost","root","","bd_artalan");
$consulta="select * from usuario where session='$usuario' and contrasena='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0){
    header("location:index_sesioniniciada.php");
}
else{
    echo "Error en el registro";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>