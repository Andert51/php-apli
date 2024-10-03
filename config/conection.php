<?php
    $server = 'localhost:3306';
    $username = 'andert';
    $password = '05010309Nint';
    $bd = 'apli_php';

    $conexion = new mysqli($server, $username, $password, $bd);

    if ($conexion->connect_error) {
        die('Conection Failed: '. $conexion->connect_error);
    }
?>