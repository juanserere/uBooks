<?php
    include_once 'config.php';

    $person_id = $_GET['id'];

    $sql_instruction = "DELETE FROM people WHERE id=:pid ";
    $query = $pdo->prepare($sql_instruction);
    
    //entrega resultado
    $query->execute([
        'pid' => $person_id
            
    ]);

    //EJECUTARsE EN EL ARCHIVO LIST.PHP
    header("location:list.php");    