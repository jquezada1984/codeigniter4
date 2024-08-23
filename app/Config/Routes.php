<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'HomeController::index');
$routes->post('index.php/home/auth', 'HomeController::auth');
$routes->get('index.php/logout', 'HomeController::logout');
$routes->get('/home/dashboard', 'Home::dashboard');
