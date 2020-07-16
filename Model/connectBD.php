<?php

function connectaBD()
{
    $servidor = "localhost";
    $usuari = "tdiw-j3";
    $clau = "f5oLbEWz";
    try {
        $connexio = new PDO("mysql:host=$servidor;dbname=tdiwj3;charset=UTF8", $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($connexio);
}





?>
