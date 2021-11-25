<?php
    require_once 'config.php';
    $resultado = false;
    if(!empty($_POST)) {
        $equipo_nit = $_POST['nit_e'];
        $equipo_nombre = $_POST['name'];
        $equipo_region = $_POST['reg'];
        $equipo_presidente = $_POST['presi'];
        $equipo_inversion = $_POST['inver'];

        $sql_instruction = "INSERT INTO equipo(Nit, Nombre, Region, Presidente, Inversion_total) VALUES (:nite, :nam, :rege, :pre, :inv)";
        $query = $pdo->prepare($sql_instruction);
        $resultado = $query->execute([
            'nite' => $equipo_nit,
            'nam' => $equipo_nombre,
            'rege' =>  $equipo_region,
            'pre' =>  $equipo_presidente,
            'inv' => $equipo_inversion
        ]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
        <header>
        <h1> Equipo </h1>
        <br>
            <ul class="nav">
                        <li>
                            <a href="index.php">Inicio |</a>
                        </li>
                        <li>
                            <a href="listE.php">| List</a>
                        </li>
            </ul>
        </header>
        <br><br><br><br>
        <section>
            <?php
                if ($resultado) {
                    echo '<div class="alert alert-success">Equipo Registrado</div>';
                    # code...
                }
            ?>

        <h1>Ingresar Equipo</h1>
            <form action="addE.php" method="post">
                <label for="nit_e">Nit</label>
                <input type="text" name="nit_e" id="nit_e">
                <br><br>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
                <br><br>
                <label for="inver">Inversión Total</label>
                <input type="text" name="inver" id="inver">
                <br><br>
                <label for="reg">Seleccione la Region: </label>
                    <select name="reg" id="reg">
                        <option value="Choco">Chocó</option>
                        <option value="Antioquia" selected>Antioquia</option>
                        <option value="Cucuta">Cucuta</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Santander">Santander</option>
                        <option value="Pasífico">Pasífico</option>
                        <option value="Boyaca">Boyacá</option>
                        <option value="Caqueta">Caquetá</option>
                        <option value="Quindio">Quindio</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Nariño">Nariño</option>
                    </select>
                <br><br>
                <label for="presi">Presidente del Club</label>
                <input type="text" name="presi" id="presi"> 
                <br><br> 
                <input type="submit" value="Register">

            </form>
        
        </section>
        <br><br><br><br><br><br>
        <footer></footer>
            &copy; created by JSRR AND AZR developer


    </div>

    
</body>
</html>