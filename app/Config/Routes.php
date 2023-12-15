<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Users');


$routes->get('/', 'Users::index');
$routes->match(['get', 'post'], '/register', 'Users::register');
$routes->match(['get', 'post'], '/login', 'Users::index');
$routes->match(['post'], '/users', 'Profile::updateUser');
$routes->get('/profile', 'Profile::index');
$routes->get('/home', 'Home::index');
$routes->get('/calories-converter', 'Calorie::index');