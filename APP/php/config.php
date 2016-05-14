<?php 

$mysql_nombre = "root";
$mysql_pass = "root";
$mysql_host = "localhost:3306";
$mysql_DB = "login_ajax";
//Establecer los datos para la conexión a la base de datos ...
$conexion = new mysqli($mysql_host, $mysql_nombre, $mysql_pass, $mysql_DB);

//Capturar error
if ($conexion->connect_error)
{
echo "Ha ocurrido un error: " . $conexion->connect_error . "Número del error: " . $conexion->connect_errno;
}


//$extraer = $conexion->query($consulta);

 ?>
