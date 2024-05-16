<?php

//Datos de conexion//

$servername ="localhost";
$username = 'root';
$password = '';
$database= 'empleados';

//conexio//
$conexion = mysql_connect($servername,$username,$password,$database);

//comprobar//
if(!$conexion){
    die("conexión Fallida: ". mysql_connect_error());
}
else
echo "Conexión Existosa". "<br>";

?>
