<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/


function titulo($a)
{
    for($i=0; $i<2; $i++){

        echo "<center>";
        echo "<h3>$a</h3>";
        echo "</center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    titulo('Ejercicio 2');
    ?>
</body>
</html>
