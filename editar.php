<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];
$activo = 1;

$query = $con->prepare("SELECT nombres, apellidos, direccion, telefono, correo_electronico, fecha_cita FROM pacientes WHERE id=:id AND activo=:activo");
$query->execute(['id'=>$id, 'activo'=>$activo]);
$num = $query->rowCount();

if ($num>0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
}else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="icon" href="img/hospital-clinic-plus-logo.png">
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
                    <h4 class="text-primary">NUEVOS REGISTROS</h4>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col">
                    <form class="row g-3" method="post" action="guarda.php" autocomplete="off">
                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>" required>
                        <div class="col-md-4">
                            <label for="nombres" class="form-label">nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" value="<?php echo $row['nombres']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo $row['apellidos']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label for="telefono" class="form-label">telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label for="direccion" class="form-label">direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $row['direccion']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label for="correo_electronico" class="form-label">correo electronico</label>
                            <input type="text" id="correo_electronico" name="correo_electronico" class="form-control" value="<?php echo $row['correo_electronico']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label for="fecha_cita" class="form-label">fecha cita</label>
                            <input type="text" id="fecha_cita" name="fecha_cita" class="form-control" value="<?php echo $row['fecha_cita']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <a href="index.php" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-primary" >Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
  
</body>
</html>
