<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Users');


$routes->get('/', 'Users::index');
$routes->match(['get','post'],'/register','Users::register');
$routes->get('/login','Login::index');
$routes->get('/profile','Profile::index');