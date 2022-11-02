<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITAS NUEVAS</title>
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
                    <h4 class="text-primary">NUEVAS CITAS</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-4">
                            <label for="nombres" class="form-label">nombre</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="apellidos" class="form-label">apellido</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="medico" class="form-label">medico</label>
                            <input type="text" id="medico" name="medico" class="form-control" required>
                        </div>
                        <hr>

                        <div class="col-md-4">
                            <label for="telefono" class="form-label">telefono</label>
                            <input type="number" id="stock" name="telefono" class="form-control">
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="correo_electronico">Email </label>
                            <input type="email"  id="correo_electronico" name="correo_electronico" class="form-control" placeholder="name@example.com" required>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="fecha_cita" class="form-label">fecha</label>
                            <input type="text" id="fecha_cita" name="fecha_cita" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>