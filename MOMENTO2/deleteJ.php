<?php
    include_once 'config.php';

    $jugador_id = $_GET['Id'];

    $sql_instruction = "DELETE FROM jugadores WHERE Id=:idej ";
    $query = $pdo->prepare($sql_instruction);
    
    //entrega resultado
    $query->execute([
        'idej' => $jugador_id
            
    ]);

    //EJECUTARsE EN EL ARCHIVO LIST.PHP
    header("location:listJ.php"); 