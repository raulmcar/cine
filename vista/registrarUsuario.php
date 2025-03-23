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
    <link rel="stylesheet" href="../css/index.css">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark-subtle">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="">
                <img src="../imagenes/logo.png" alt="" width="110" height="80">
            </a>
            <a class="navbar-brand fs-4 fw-semibold mx-auto" href="#">Cartelera</a>
        <div class="dropdown">
            <button class="btn btn-warning text-black rounded-circle dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill fs-3"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-3 shadow-lg" style="width: 250px;">
                <h6 class="text-center fw-bold">Iniciar Sesión</h6>
                <form>
                    <div class="mb-2">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Entrar</button>
                </form>
                <p class="text-center mb-0 mt-1">
                    <a href="./vista/registrarUsuario.php" class="text-decoration-none">¿No tienes cuenta? Regístrate</a>
                </p>
            </div>
        </div>
        </div>
    </nav>

    <div class="container w-100 d-flex justify-content-center rounded mb-5">
        <form id="formulario" class="col-6 mt-5 p-3 rounded bg-dark-subtle bg-gradient text-dark" action="../controlador/registrarUsuario.php" method="post">
            <div class="mb-2">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" name="email">
                <div id="emailHelp" class="form-text">Tranqui, no vamos a compartir tu correo con nadie.</div>
            </div>
            <div class="mb-2">
                <label class="form-label">Contraseña</label>
                <input type="password" id="contrasena1" name="contrasena" class="form-control">
                <button type="button" class="form-control btn btn-warning text-dark mt-2" onclick="mostrarContrasena1()">Ver contraseña</button>
            </div>
            <div class="mb-2">
                <label class="form-label">Repite la contraseña</label>
                <input type="password" id="contrasena2" name="contrasena2" class="form-control">
                <button type="button" class="form-control btn btn-warning text-dark mt-2" onclick="mostrarContrasena2()">Ver contraseña</button>
            </div>
            <div class="mb-2">
                <label class="form-label">Teléfono</label>
                <input type="number" name="telefono" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">DNI</label>
                <input type="text" name="dni" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="mb-2 pt-3">
                <input type="submit" name="registrarme" value="Registrarme" class="form-control btn btn-warning text-dark">
            </div>
            <div class="text-center mt-4 text-decoration-none">
                <span>¿Ya tienes cuenta? </span>
                <a href="./vista/iniciarSesion.php" class="fw-bold text-decoration-none">Inicia sesión</a>
            </div>
        </form>
    </div>

    <script>
        function mostrarContrasena1() {
            const passwordInput = document.getElementById('contrasena1');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

        function mostrarContrasena2() {
            const passwordInput = document.getElementById('contrasena2');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>