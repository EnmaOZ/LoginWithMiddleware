<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

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
      .login-container {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
        margin: auto;
      }
      .login-title {
        color: #00b4d8;
        font-weight: bold;
        text-align: center;
      }
      .btn-primary {
        background-color: #00b4d8;
        border: none;
      }
      .btn-primary:hover {
        background-color: #48cae4;
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
          <li class="nav-item">
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
    <div class="d-flex justify-content-center align-items-center" style="height: calc(100vh - 56px);">
      <div class="login-container">
        <h2 class="login-title">Iniciar Sesión</h2>
        <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
          </div>
        <?php endif; ?>
        <form action="<?php echo base_url('/login') ?>" method="POST">
          <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
        <p class="text-center mt-3">
          <a href="#" style="color: #00b4d8;">¿Olvidaste tu contraseña?</a>
        </p>
      </div>
    </div>
  </body>
</html>
