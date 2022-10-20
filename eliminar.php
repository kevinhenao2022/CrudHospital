<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("DELETE FROM pacientes WHERE id=?");
$query->execute([$id]);
$eliminado = $query->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANCELAR CITA</title>
    <link rel="icon" href="img/copamundial.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
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
                <?php if($eliminado>0){ ?>
                        <h3 class="text-info">CITA CANCELADA</h3>
                        <?php } else { ?>
                        <h3 class="text-danger">ERROR AL ELIMINAR LA CITA</h3>
                    <?php } ?> 
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary" href="index.php"> VOLVER A INICIO</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>