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
<div class="container" >
<h1> EQUIPOS NACIONALES</h1>
<br><br>
<div class="row">       
    <div class="col" >
    <a href="index.php">VOLVER A INICIO</a> 
    
    </div>
    <div class="col" >
    <a href="listE.php">LISTADO DE EQUIPOS</a>
    </div>
    <div class="col">
     <a href="Estadios.php">ESTADIOS</a> 
    </div>
        
       
       
       
        <br><br><br><br>
        <section>
            <?php
                if ($resultado) {
                    echo '<div class="alert alert-success">Equipo Registrado</div>';
                    
                }
            ?>

        <h1>Ingresar Equipo</h1>

        <div class="form-group">
            <form action="addE.php" method="post">
                <label for="nit_e">Nit</label>
                <input type="text" class="form-control" name="nit_e" id="nit_e">
                <br><br>
                <label for="name">Nombre</label>
                <input type="text"class="form-control" name="name" id="name">
                <br><br>
                <label for="inver">Inversión Total</label>
                <input type="text"class="form-control" name="inver" id="inver">
                <br><br>
                <label for="reg">Seleccione la Region: </label>
                    <select name="reg" class="form-control" id="reg">
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
                <input type="text"class="form-control" name="presi" id="presi"> 
                <br><br> 
                <input type="submit"  class="btn btn-success" value="Register">

            </form>
            
        </div>
        </section>
        <br><br><br><br><br><br>
        <footer></footer>
            &copy; created by JSRR AND AZR developer


    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    
</body>
</html>