<?php
echo "<h1>". "hola mundo en Php"."</h1>"."<br>";
echo "<h2>". "variables"."</h2>";
$nombre= "John S";
$edad = 21;
echo " Mi nombre es:". $nombre. " y mi edad es: ". $edad;
echo "<h2>". "Estructura control iF". "</h2>";
$num1= 5;
$num2= 6;
if($num1 > $num2)
echo " numero 1 es mayor". "</h2>";
else
echo "numero 1 es menor". "</h2>";
echo "La suma es". $num1 + $num2. "</h2>";
echo " Multiplicacion  es ". $num1* $num2. "</h2>";

echo "<h2>". "Estructura control While". "</h2>";
$n =6;
 while($n <=5){
    echo "Hoy es lunes". "</br>";
    $n++;
}
echo "<h2>". "Estructura control  Do While". "</h2>";
$m = 6;
do{
    echo "Hoy es lunes". "</br>";

}

while ( $m=6 <=5);{
    echo "Hoy es lunes". "</br>";
    $n++;
}
?>
