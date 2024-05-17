<?php

//Datos de conexiónº
$servername = '127.0.0.1:3399';
$username = 'Johns';
$password = '';
$database = 'empleados';

//Conexión
$conexion = mysqli_connect($servername,$username,$password,$database);

//Comprobar

if(!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else    
    echo "Conexión Exitosa"."<br>";
?>