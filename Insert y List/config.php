<?php
    $db_server = 'localhost';
    $db_name = 'gestionpersonas';
    $db_user = 'root';
    $db_Pass = '';

    //Conexion con PDO
    try {
        $pdo = new PDO("mysql:host=$db_server; dbname=$db_name", $db_user, $db_Pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo $e->getMessage();   
    } 
?>