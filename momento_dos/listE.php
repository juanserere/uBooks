<?php
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM equipo");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br>
    <header>
        <h1>LISTADO DE EQUIPOS</h1>
        <br><br>

        <div class="row">
    <div class="col" >
    <a href="addE.php">VOLVER</a> 
    </div>
        
    </header>
    <br><br>
    <section>
        <h2>Equipos Registrados</h2>
        <table class="table">
            <tr>
                <th>NIT</th>
                <th>Nombre</th>
                <th>Inversión Total</th>
                <th>Presidente</th>
                

                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <!-- traer los datod(mostrar) --> 
            <?php foreach ($queryResult as $row): ?>
                <tr>
                    <td> <?= $row["Nit"] ?></td>
                    <td> <?= $row["Nombre"] ?></td>
                    <td> <?= $row["Inversion_total"] ?></td>
                    <td> <?= $row["Presidente"] ?></td>
                    
                    <!-- agregar el edti y delete a cada registro -->
                    <td> <a href="editE.php?Nit=<?= $row['Nit'] ?>; ">Edit</a> </td>
                    <td> <a href="deleteE.php?Nit=<?= $row['Nit'] ?>; ">Delete</a> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <br><br><br><br><br><br>
    <footer>
        &copy; created by JSRR AND AZR developer
    </footer>

    </div>
    
</body>
</html>