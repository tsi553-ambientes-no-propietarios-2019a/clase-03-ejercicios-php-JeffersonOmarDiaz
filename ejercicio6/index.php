<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
function verificaPalabra($palabra){
    //$palabra ="murcielag";
    $vocales = array(
    
        array('a'),
        array('e'),
        array('i'),
        array('o'),
        array('u')
    );
    $contador = 0;
    $contadorA = 0;
    $contadorE = 0;
    $contadorI = 0;
    $contadorO = 0;
    $contadorU = 0;
    
    for ($i=0; $i < strlen($palabra); $i++) { 
        echo "<b>$palabra[$i]  </b>";
    }
    //echo "<br> LA PAlABRA CONTIENE ";
    //echo strlen($palabra), " LETRAS ";
    //echo sizeof($vocales), " Vocales<br>";
    echo "<br>";
    
    for ($i=0; $i < sizeof($vocales); $i++) { 
        for($j=0; $j<strlen($palabra);$j++){
            //echo "<br>comparativa vocales: ", $vocales[$i][0], " letra palabra: ", $palabra[$j];
            if ($vocales[$i][0]==$palabra[$j]) {
                //$contador=$contador+1;
                if($vocales[0][0]==$palabra[$j]){
                    $contadorA=$contadorA+1;
                }elseif ($vocales[1][0]==$palabra[$j]) {
                    $contadorE=$contadorE+1;
                }elseif ($vocales[2][0]==$palabra[$j]) {
                    $contadorI=$contadorI+1;
                }elseif ($vocales[3][0]==$palabra[$j]) {
                    $contadorO=$contadorO+1;
                }elseif ($vocales[4][0]==$palabra[$j]) {
                    $contadorU=$contadorU+1;
                }
                $contador=$contadorA+$contadorE+$contadorI+$contadorO+$contadorU;
            }
            //echo "<br>El contador esta en: ", $contador;
        }
    }
    echo "Número de vocales de la palabra: ",$palabra," ",$contador,"<br>";
    if ($contador==5) {
        echo "La palabra <b>",$palabra, "</b> tiene las 5 vocales sin repetir y ",strlen($palabra)," letras <br>";
        //break;
    }
    //elseif($contador>5){
    //    echo "La palabra",$palabra, "repite las vocales";
        //break;
    //}else{
    //    echo "La palabra <b>",$palabra,"</b> no tiene todas las vocales o las repite más de una vez";
    //}
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
     verificaPalabra('queso');
     verificaPalabra('murcielago');
     verificaPalabra('acuifero');
     verificaPalabra('aceituno');
     verificaPalabra('craneoencefalico');
     ?>
 </body>
 </html>

