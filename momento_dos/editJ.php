<?php
    require_once 'config.php';
    $resultado = false;

    if(!empty($_POST)) 
    {

        $jugador_id = $_POST['Id'];
        $new_jugador_nombre = $_POST['name_j'];
        $new_jugador_apellido = $_POST['last_name_j'];
        $new_jugador_pais = $_POST['country'];
        $new_jugador_edad = $_POST['age'];
        $new_jugador_tipo_jugador = $_POST['tipo_j'];
        $new_jugador_precio = $_POST['precio'];
        $new_jugador_nit_equipo = $_POST['nit_equi'];

            //operaciones
        $sql_instruction = "UPDATE jugadores SET Nombre=:nomju, Apellido=:appelle, Pais=:countryj, Edad=:agej, Tipo_jugador=:typej, Precio=:cashj, nit_equipo=:nitej  WHERE Id=:idej";

        $query = $pdo->prepare($sql_instruction);


            //entrega resultado
        $resultado = $query->execute([
            'idej' => $jugador_id,
            'nomju' => $new_jugador_nombre,
            'appelle' =>  $new_jugador_apellido,
            'countryj' =>  $new_jugador_pais,
            'agej' =>  $new_jugador_edad,
            'typej' =>  $new_jugador_tipo_jugador,
            'cashj' => $new_jugador_precio,
            'nitej' => $new_jugador_nit_equipo
        ]);
        $value_name = $new_jugador_nombre;
        $value_appellido = $new_jugador_apellido;
        $value_pais = $new_jugador_pais;
        $value_edad = $new_jugador_edad;
        $value_tipo_jugador = $new_jugador_tipo_jugador;
        $value_precio = $new_jugador_precio;
        $value_nit_equipo = $new_jugador_nit_equipo;

    } else 
    {
        // si no trae los datos, realizar una consulta a la DB para obtenerlos  desde la tabla 
        $jugador_id = $_GET['Id'];

        $sql_instruction = "SELECT * FROM jugadores WHERE Id=:idej ";
        $query = $pdo->prepare($sql_instruction);
        //entrega resultado
        $query->execute([
            'idej' => $jugador_id
            
        ]);

        
        $row = $query->fetch(PDO::FETCH_ASSOC);

        $value_id = $row['Id'];
        $value_name = $row['Nombre'];
        $value_appellido = $row['Apellido'];
        $value_pais = $row['Pais'];
        $value_edad = $row['Edad'];
        $value_tipo_jugador = $row['Tipo_jugador'];
        $value_precio = $row['Precio'];
        $value_nit_equipo = $row['nit_equipo'];
     
        //llevar las variables como valores al formulario es decir a los input

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jugadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
        
            <h1>Editar Jugador</h1>
            <ul class="nav">
            <li>
                <a href="index.php">Home |</a>
            </li>
            <li>
                <a href="listJ.php">| List</a>
            </li>
            </ul>
        </header>
        <br><br><br><br><br>

        <section>
        <?php
            if ($resultado) {
                echo '<div class="alert alert-success">Jugador Editado Con Éxito</div>';
                    
                }
        ?>
        <h1>Editar Jugador</h1>
            <form action="editJ.php" method="post">
            
                <label for="name_j">Nombre</label>
                <input type="text" name="name_j" id="name_j">
                <br><br>
                <label for="last_name_j">Apellidos</label>
                <input type="text" name="last_name_j" id="last_name_j">
                <br><br>
                <label for="country">Pais</label>
                <input type="text" name="country" id="country">
                <br><br>
                <label for="age">Edad</label>
                <input type="text" name="age" id="age"> 
                <br><br> 
                <label for="tipo_j">Tipo De Jugador</label>
                <input type="text" name="tipo_j" id="tipo_j">
                <br><br>
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio"> 
                <br><br>
                <label for="nit_equi">Nit Equipo</label>
                <input type="text" name="nit_equi" id="nit_equi">
                <br><br>
            
            <!-- traer el dato a buscar de forma oculta -->
                <input type="hidden" name="Id" id="Id" value="<?php echo $jugador_id ?>">
                <input type="submit" value="Update">    
            </form>
        
        
        
        </section>
        <br><br><br>
        <footer>
            &copy; created by JSRR AND AZR developer
        </footer>
    </div>
    
</body>
</html>


        
        

