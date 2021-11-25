<?php
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM people");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
    <header>
        <h1>Person Management</h1>
        <ul class="nav">
            <li>
                <a href="index.php">Home |</a>
            </li>
            <li>
                <a href="add.php">Add</a>
            </li>
        </ul>
    </header>
    <br><br><br><br><br><br>
    <section>
        <h2>Person list</h2>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Names</th>
                <th>Ages</th>

                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <!-- traer los datod(mostrar) --> 
            <?php foreach ($queryResult as $row): ?>
                <tr>
                    <td> <?= $row["id"] ?></td>
                    <td> <?= $row["nombre"] ?></td>
                    <td> <?= $row["edad"] ?></td>
                    <!-- agregar el edti y delete a cada registro -->
                    <td> <a href="edit.php?id=<?= $row['id'] ?>; ">Edit</a> </td>
                    <td> <a href="delete.php?id=<?= $row['id'] ?>; ">Delete</a> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <br><br><br><br><br><br>
    <footer>
        &copy; created by JSRR developer
    </footer>

    </div>
    
</body>
</html>