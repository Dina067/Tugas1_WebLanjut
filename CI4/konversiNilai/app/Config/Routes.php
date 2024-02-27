<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/konversi-nilai', 'KonversiNilaiController::index', ['as' => 'konversi-nilai']);
$routes->post('/konversi-nilai/hasil', 'KonversiNilaiController::hasil', ['as' => 'konversi-nilai.hasil']);
