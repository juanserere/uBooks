<?php
    require_once 'config.php';
    $resultado = false;
    //validar que ek post venga con datos
    if (!empty($_POST)) {
        # code...
        $person_id = $_POST['idp'];
        $person_name = $_POST['name']; //Recivir variable interna del formulario en el archivo php
        $person_age = $_POST['age'];
        $person_foto = $_POST['photo'];
        $person_url_photo = $_POST['url_photo'];
        $person_id_person = $_POST['id_person'];

        //opercaciones
        $sql_instruction = "INSERT INTO people(id, nombre, edad, foto, foto_url, people_type_id ) VALUES (:pid, :nom, :ed, :phot, :phot_url, :pidper)";
        $query = $pdo->prepare($sql_instruction);
    
        //entrega de resultados
        $resultado = $query->execute([
            'pid' => $person_id,
            'nom' => $person_name,
            'ed' =>  $person_age,
            'phot' =>  $person_foto,
            'phot_url' =>   $person_url_photo,
            'pidper' => $person_id_person
        ]);
    }
    //Entrada de datos
   




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
            <a href="index.php">Home</a>
        
        
        </header>
        <br><br><br><br><br><br>
        <section>
            <?php
                if ($resultado) {
                    echo '<div class="alert alert-success">Registro ok</div>';
                    # code...
                }
            ?>

            
        <h1>Person add</h1>
            <form action="add.php" method="post">
                <label for="idp">Id</label>
                <input type="text" name="idp" id="idp">
                <br><br>
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
                <label for="id_person">Id Person</label>
                <input type="text" name="id_person" id="id_person"> 
                <br><br> 
                <input type="submit" value="Register">

            </form>
        
        </section>
        <br><br><br><br><br><br>
        <footer></footer>
            &copy; created by JSRR developer


    </div>
    
</body>
</html>