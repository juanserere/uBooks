<?php
    require_once 'config.php';
    $resultado = false;
    //validar que el post venga con datos
   
    if (!empty($_POST))
    {
        //si trae los datos, realizar actualizacion
        //ENTRADA DE DATOS
        $person_id = $_POST['id'];
        $new_person_name = $_POST['name'];
        $new_person_age = $_POST['age'];
        $new_person_foto = $_POST['photo'];
        $new_person_url_photo = $_POST['url_photo'];
        $new_person_id_person = $_POST['id_person'];
        
        //operaciones
        $sql_instruction = "UPDATE people SET nombre=:nom, edad=:ed, foto=:phot, foto_url=:phot_url, people_type_id=:pidper WHERE id=:pid";

        $query = $pdo->prepare($sql_instruction);

        //entrega resultado
        $resultado = $query->execute([
            'pid' => $person_id,
            'nom' => $new_person_name,
            'ed' =>  $new_person_age,
            'phot' =>  $new_person_foto,
            'phot_url' =>  $new_person_url_photo,
            'pidper' => $new_person_id_person
        ]);
        $value_name = $new_person_name;
        $value_age = $new_person_age;
        $value_phot = $new_person_foto;
        $value_phot_url = $new_person_url_photo;
        $value_pidper = $new_person_id_person;
    } else 
    {
        // si no trae los datos, realizar una consulta a la DB para obtenerlos  desde la tabla 
        $person_id = $_GET['id'];

        $sql_instruction = "SELECT * FROM people WHERE id=:pid ";
        $query = $pdo->prepare($sql_instruction);
        //entrega resultado
        $query->execute([
            'pid' => $person_id
            
        ]);

        ///traer los datos del registro en un array asociativo
        //es asociativo porque porque todos los datos(nombre, edad, foto, id_person, url:foto)
        //deben corresponder al id que consultó
        $row = $query->fetch(PDO::FETCH_ASSOC);

        $value_id = $row['id'];
        $value_name = $row['nombre'];
        $value_age = $row['edad'];
        $value_phot = $row['foto'];
        $value_phot_url = $row['foto_url'];
        $value_pidper = $row['people_type_id'];
        //llevar las variables como valores al formulario es decir a los input

    }
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
<div class="container">
<header>
    <h1> Person Management </h1>
    <ul class="nav">
        <li>
            <a href="index.php">Home |</a>
        </li>
        <li>
            <a href="list.php">| List</a>
        </li>
    </ul>
</header>
<br><br><br><br><br>
<section>
        <?php
            if ($resultado) {
                echo '<div class="alert alert-success">Registro Actualizado</div>';
                    # code...
                }
        ?>
    <h2>Person Edit</h2>
    <form action="edit.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <br><br>
        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo">
        <br><br>
        <label for="url_photo">URL Photo</label>
        <input type="text" name="url_photo" id="url_photo">
        <br><br> 
        <label for="id_person">Id Person Type</label>
        <input type="text" name="id_person" id="id_person">
        <br><br>
        <!-- traer el dato a buscar de forma oculta -->
        <input type="hidden" name="id" id="id" value="<?php echo $person_id ?>">
        <input type="submit" value="Update">
    </form>
</section>
<br><br><br><br>
<footer>
    &copy; created by JSRR developer
</footer>
</div>
</body>
</html>



