<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

$maximo =12;
$numero =2;
echo "<h2>For</h2>";
for($i=1; $i<=1; $i++){
//print ($i);
for($j=1; $j<=$maximo; $j++){
    echo $j, "*", $numero,"=",$numero*$j;
    echo "<br>";
}
}
echo "<br>";
echo "<h2>While</h2>";
$inicial = 1;

while ($inicial <= $maximo){

echo $inicial,"*",$numero,"=",$inicial*$numero;

$inicial++;
echo "<br>";
}

echo "<br>";

echo "<h2>Do while</h2>";
$i = 0;
do {
    $i++;
    echo $i, "*", $numero, "=",$i*$numero;
    echo "<br>";
} while ($i != $maximo);
?>
