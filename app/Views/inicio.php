<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
      body {
        background: linear-gradient(120deg, #00b4d8, #48cae4);
        color: #ffffff;
        font-family: Arial, sans-serif;
        height: 100vh;
        margin: 0;
      }
      .card {
        background: white;
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        padding: 30px;
        text-align: center;
      }
      .navbar {
        background-color: #00b4d8;
        border-bottom: 3px solid #48cae4;
      }
      .navbar-brand, .nav-link {
        color: white !important;
      }
      .nav-link:hover {
        color: #caf0f8 !important;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Mi Sitio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center" style="height: calc(100vh - 56px);">
      <div class="card">
        <h1 class="card-title">¡Bienvenido!</h1>
        <p>Estas dentro del inicio</p>
        <a href="#" class="btn btn-primary">Ir a la página principal</a>
      </div>
    </div>
  </body>
</html>
