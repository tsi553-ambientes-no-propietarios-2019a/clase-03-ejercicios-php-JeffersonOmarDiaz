<?php

/**
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.

Para imprimir el contenido de una variable también utilizamos el comando echo:

echo $num;
 */
$num=rand(1,100);
$compara =50;
echo "Nùmero randòmico ";
echo $num;
echo "<br>";
if($num>50){
    echo $num, " es mayor que ",$compara;
}elseif($num<50){
    echo $num, " es menor que ",$compara;
}else{
    echo $num, " es igual a ",$compara;
}
?>