<?php
echo "<h2>"."Funciones PHP" . "</h2>";
function  saludo(){
    echo"<h2>"." saludo"."</h2>";
    echo date("y-m-d");


}
function saludar($nombre, $apellido){
    echo"<h2>"." Saludo"."</h2>";
    echo"<h3>"."Mi nombre es: ".$nombre." ".$apellido."</h3>";
    echo date("y-m-d /  H:i:s");
}

function sumar ($a , $b){
    echo "<h2>"."La suma es " . "</h2>";
    $r= $a + $b;
    echo "<h3>".$r."</h3>";

}

function Multiplicar ($a , $b){
    echo "<h2>"."el resultado es  " . "</h2>";
    $r= $a * $b;
    echo "<h3>".$r."</h3>";

}

echo saludo();
echo saludar("John", "Sapatanga" );  
echo saludar("Estefania", "A" );
$num1= 20;
$num2= 7;
echo sumar( 10,37);
echo sumar( $num1 ,  $num2);
echo Multiplicar( $num1 ,  $num2);

?>