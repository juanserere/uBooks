<?php
    require_once 'config.php';
    $resultado = false;
    if(!empty($_POST)) {
        $jugador_id = $_POST['idj'];
        $jugador_nombre = $_POST['name_j'];
        $jugador_apellido = $_POST['last_name_j'];
        $jugador_pais = $_POST['country'];
        $jugador_edad = $_POST['age'];
        $jugador_tipo_jugador = $_POST['tipo_j'];
        $jugador_precio = $_POST['precio'];
        $jugador_nit_equipo = $_POST['nit_equi'];

        $sql_instruction = "INSERT INTO jugadores(Id, Nombre, Apellido, Pais, Edad, Tipo_jugador, Precio, nit_equipo) VALUES (:idju, :nomj, :apej, :paisj, :edj, :tipoj, :prej, :nitj)";
        $query = $pdo->prepare($sql_instruction);
        
        $resultado = $query->execute([
            'idju' => $jugador_id,
            'nomj' => $jugador_nombre,
            'apej' =>  $jugador_apellido,
            'paisj' =>  $jugador_pais,
            'edj' =>  $jugador_edad,
            'tipoj' =>  $jugador_tipo_jugador,
            'prej' =>  $jugador_precio,
            'nitj' =>  $jugador_nit_equipo,
        ]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br>
        <header>
            
        <h1> JUGADORES </h1>
        <br><br>
        <div class="row">       
    <div class="col" >
    <a href="index.php">VOLVER A INICIO</a> 
    
    </div>
    <div class="col" >
    <a href="listJ.php">LISTADO DE JUGADORES</a>
    </div>
    <div class="col">
     <a href="Estadios.php">ESTADIOS</a> 
    </div>
         
        </header>
        <br>
        <section>
            <?php
                if ($resultado) {
                    echo '<div class="alert alert-success">Jugador Registrado</div>';
                    # code...
                }
            ?>
            
            <img src="img/images.jpg" class="img-fluid" alt="..."> 
            <br> 

        <h1>Registrar Jugador</h1>

            <form action="addJ.php" method="post">
                <label for="idj">ID Jugador</label>
                <input type="text" class="form-control" name="idj" id="idj">
                <br><br>
                <label for="name_j">Nombre</label>
                <input type="text" class="form-control" name="name_j" id="name_j">
                <br><br>
                <label for="last_name_j">Apellidos</label>
                <input type="text" class="form-control" name="last_name_j" id="last_name_j">
                <br><br>
                <label for="country">Pais</label>
                <input type="text" class="form-control" name="country" id="country">
                <br><br>
                <label for="age">Edad</label>
                <input type="text" class="form-control" name="age" id="age"> 
                <br><br> 
                <label for="tipo_j">Seleccione Posicion de Juego: </label>
                    <select name="tipo_j" class="form-control" id="tipo_j">
                        <option value="Portero">Portero</option>
                        <option value="Delantero" selected>Delantero</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Lateral Derecho">Lateral Derecho</option>
                        <option value="Lateral Izquierdo">Lateral Izquierdo</option>
                        <option value="Volante">Volante</option>
                    </select>
                <br><br>
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio"> 
                <br><br>
                <label for="nit_equi">Nit Equipo</label>
                <input type="text" class="form-control" name="nit_equi" id="nit_equi">
                <br><br><br>
                <input type="submit"  class="btn btn-success" value="Register">

            </form>
        
        </section>
        <br><br><br><br><br><br>
        <footer></footer>
            &copy; created by JSRR AND AZR developer


    </div>
    
</body>
</html>