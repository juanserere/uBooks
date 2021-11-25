<?php
    include_once 'config.php';

    $equipo_nit = $_GET['Nit'];

    $sql_instruction = "DELETE FROM equipo WHERE Nit=:nit_e ";
    $query = $pdo->prepare($sql_instruction);
    
    //entrega resultado
    $query->execute([
        'nit_e' => $equipo_nit
            
    ]);

    //EJECUTARsE EN EL ARCHIVO LIST.PHP
    header("location:listE.php");   