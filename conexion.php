<?php

$link = 'mysql:host=localhost; dbname=yt_colores';
$user = 'root';
$pass = null;

try{
    $pdo = new PDO($link, $user, $pass);

    echo 'Conectado <br>';

    //foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
    //    print_r($fila);
    //}

}catch (PDOException $e) {
    print "¡Error!: " .$e->getMessage() . "<br/>";
    die();
}