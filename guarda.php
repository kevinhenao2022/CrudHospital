<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $medico = $_POST['medico'];
    $email = $_POST['correo_electronico'];
    $fecha = $_POST['fecha_cita'];


    $query = $con->prepare("UPDATE pacientes SET nombres=?, apellidos=?,
     telefono=?, medico=?, correo_electronico=?, fecha_cita=? WHERE id=? ");
     $resultado = $query->execute(array($nombres, $apellidos, $telefono, $medico, $email, $fecha, $id, ));

    if($resultado){
        $correcto = true;
    }
} else {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $medico = $_POST['medico'];
    $email = $_POST['correo_electronico'];
    $fecha = $_POST['fecha_cita'];

    

    $query = $con->prepare("INSERT INTO pacientes (nombres, apellidos, telefono, medico, correo_electronico, fecha_cita, activo)
    VALUES (:nom, :apell, :tel, :doc, :email, :fecha, 1)");
    $resultado = $query->execute(array(':nom'=>$nombres, ':apell'=>$apellidos, ':tel'=>$telefono, ':doc'=>$medico, ':email'=>$email, ':fecha'=>$fecha));

    if($resultado){
        $correcto = true;
        echo $con->lastInsertId();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUARDAR</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="img/hospital-clinic-plus-logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> HOSPITAL</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> INICIO</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info.php"> MAS INFORMACION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.php"> CONTACTO</a>
        </li>
        </ul>
        </div>
        </nav>
    </nav>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                <?php if ($correcto) { ?>
                        <h3 class="text-info">Registro Guardado</h3>
                    <?php } else { ?>
                        <h3 class="text-info">Error al guardar</h3>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main> 
</body>
</html>