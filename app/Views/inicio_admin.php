<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilos específicos para la página del admin */
        body {
            background: linear-gradient(120deg, #ff7e5f, #feb47b);
            color: white;
        }
        .card {
            background: white;
            color: black;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <h1 class="card-title">¡Bienvenido, Administrador!</h1>
            <p>Accede a todas las funciones de administración.</p>
            <a href="#" class="btn btn-primary">Ir al panel de administración</a>
            <hr>
            <!-- Botón de salir -->
            <a href="<?= site_url('logout') ?>" class="btn btn-danger">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>
