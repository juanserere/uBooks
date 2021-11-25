<?php
    require_once 'config.php';
    $resultado = false;

    if(!empty($_POST)) 
    {

        $equipo_nit = $_POST['Nit'];
        $new_equipo_nombre = $_POST['name'];
        $new_equipo_region = $_POST['reg'];
        $new_equipo_presidente = $_POST['presi'];
        $new_equipo_inversion = $_POST['inver'];

        //operaciones
        $sql_instruction = "UPDATE equipo SET Nombre=:nom, Region=:rege, Presidente=:presi, Inversion_total=:invere  WHERE Nit=:nit_e";

        $query = $pdo->prepare($sql_instruction);

        //entrega resultado
        $resultado = $query->execute([
            'nit_e' => $equipo_nit,
            'nom' => $new_equipo_nombre,
            'rege' =>  $new_equipo_region,
            'presi' =>  $new_equipo_presidente
            'invere' =>  $new_equipo_inversion
        ]);

        
        $value_nombre = $new_equipo_nombre;
        $value_region = $new_equipo_region;
        $value_presidente = $new_equipo_presidente;
        $value_inversion = $new_equipo_inversion;
    } else 
    {
        // si no trae los datos, realizar una consulta a la DB para obtenerlos  desde la tabla 
        $equipo_nit = $_GET['Nit'];

        $sql_instruction = "SELECT * FROM equipo WHERE Nit=:nit_e ";
        $query = $pdo->prepare($sql_instruction);
        //entrega resultado
        $query->execute([
            'nit_e' => $equipo_nit
            
        ]);

        ///traer los datos del registro en un array asociativo
        //es asociativo porque porque todos los datos(nombre, edad, foto, id_person, url:foto)
        //deben corresponder al id que consultó
        $row = $query->fetch(PDO::FETCH_ASSOC);

        $value_nit = $row['Nit'];
        $value_nombre = $row['Nombre'];
        $value_region = $row['Region'];
        $value_presidente = $row['Presidente'];
        $value_inversion = $row['Inversion_total'];
        
        //llevar las variables como valores al formulario es decir a los input

    }
?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Equipo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        </head>
        <body>
        <div class="container">
        <header>
                <h1> Editar Equipo </h1>
                <ul class="nav">
                    <li>
                        <a href="index.php">Home |</a>
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
                        echo '<div class="alert alert-success">Equipo Editado Correctamente</div>';
                        # code...
                    }
                ?>

            <h1>Editar Equipo</h1>
                <form action="editE.php" method="post">
            
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                    <br><br>
                    <label for="reg">Region</label>
                    <input type="text" name="reg" id="reg">
                    <br><br>
                    <label for="presi">Presidente del Club</label>
                    <input type="text" name="presi" id="presi"> 
                    <br><br> 
                    <label for="inver">Inversión</label>
                    <input type="text" name="inver" id="inver">
                    <!-- traer el dato a buscar de forma oculta -->
                    <input type="hidden" name="Nit" id="Nit" value="<?php echo $equipo_nit ?>">
                    <input type="submit" value="Update">
                </form>
            
        </section>
        <br><br><br><br><br><br>
        <footer>
            &copy; created by JSRR AND AZR developer
        </footer>
        </div>
        </body>
        </html>

