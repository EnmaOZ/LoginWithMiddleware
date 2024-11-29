<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');        // Ruta para la página de login
$routes->post('/login', 'Home::login');  // Ruta para procesar el login
$routes->get('/inicio', 'Home::inicio'); // Ruta para el inicio (dependiendo del rol)
$routes->get('/logout', 'Home::logout'); // Ruta para cerrar sesión
