<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css?v=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-black bg-gradient" style="--bs-bg-opacity: .5;">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="../index.php">
                <img src="../imagenes/logo.png" alt="Bootstrap" width="110" height="80">
            </a>
            <a class="navbar-brand fs-4 fw-semibold mx-auto text-light" href="#">Cartelera</a>
            <a class="navbar-brand fs-4 fw-semibold mx-auto text-light" href="#">Foro</a>
            <p class="text-light m-2"><?php echo "Bienvenido administrador: " . $_SESSION['usuario']; ?></p>
            <div class="dropdown">
                <button class="btn btn-primary text-white rounded-circle dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill fs-3"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end p-3 shadow-lg" style="width: 250px;">
                    <a href="../index.php" class="btn btn-dark w-100">Cerrar sesión</a>
                    <a href="./iniciadoAdmin.php" class="btn btn-dark w-100">Volver al menú admin</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container w-100 d-flex justify-content-center rounded mb-5">
        <form id="formulario" class="col-6 mt-5 p-3 rounded bg-dark-subtle bg-gradient text-dark" enctype="multipart/form-data" action="../controlador/registrarPelicula.php" method="post">
            <div class="mb-2">
                <label class="form-label">Nombre de la película</label>
                <input type="text" name="nombrePeli" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Sinopsis</label>
                <input type="text" name="sinopsis" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Duración</label>
                <input type="number"  name="duracion" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Género</label>
                <input type="text" name="genero" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Clasificación</label>
                <input type="number" name="clasificacion" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Cartel de la película</label>
                <input type="file" name="cartelPeli" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary text-center mt-2">Regsitrar polideportivo</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>