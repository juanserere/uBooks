<?php
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM jugadores");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado jugadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header>
        <h1>Listado de Jugadores</h1>
        <ul class="nav">
            <li>
                <a href="index.php">Volver |</a>
            </li>
        </ul>
    </header>
    <br><br><br><br><br>
    <section>
        <h2>Listado De Jugadores</h2>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Pais</th>
                <th>Edad</th>
                <th>Tipo de Jugador</th>
                <th>Precio</th>
                <th>Nit Equipo</th>
                

                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <!-- traer los datod(mostrar) --> 
            <?php foreach ($queryResult as $row): ?>
                <tr>
                    <td> <?= $row["Id"] ?></td>
                    <td> <?= $row["Nombre"] ?></td>
                    <td> <?= $row["Apellido"] ?></td>
                    <td> <?= $row["Pais"] ?></td>
                    <td> <?= $row["Edad"] ?></td>
                    <td> <?= $row["Tipo_jugador"] ?></td>
                    <td> <?= $row["Precio"] ?></td>
                    <td> <?= $row["nit_equipo"] ?></td>
                    
                    <!-- agregar el edti y delete a cada registro -->
                    <td> <a href="editJ.php?Id=<?= $row['Id'] ?>; ">Edit</a> </td>
                    <td> <a href="deleteJ.php?Id=<?= $row['Id'] ?>; ">Delete</a> </td>
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