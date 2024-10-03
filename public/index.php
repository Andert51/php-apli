<?php
    echo 'Hola Mundo';
    $nombre = 'Marco';
    $edad = 44;

    echo 'Hola ' . $nombre . ' tienes ' . $edad . ' años';

    /*

    Operadores:
    Aritmeticos: + - * / %
    Comparacion: == === != !== > < >= <=
    Logicos: && || !
    Bitwise: & | ^ ~ << >>
    
    */

    $a = 45;
    $b = 45.8;
    $suma = $a + $b;
    $resta = $a - $b;
    $mul = $a * $b;
    $div = $a / $b;
    echo  'The results are: ' . $suma . ' ' . $resta . ' ' . $mul . ' ' . $div;

    $regla = 20;

    if($regla < 20 ){
        echo 'menor';
    } else if ($regla ==20) {
        echo 'igual';
    } else {
        echo 'mayor';
    }

    $i = 0;
    for ($i = 0; $i < $regla; $i++){
        echo 'Numero' . $i . '<br>';
    }

    $i = 0;
    while($i < $regla){
        echo 'Numero' . $i . '<br>';
        $i++;
    }   
?>