<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1');

$routes->get('/posts', 'PostController::index');
$routes->get('/posts/create', 'PostController::create');
$routes->post('/posts/store', 'PostController::store');
$routes->get('/posts/edit/(:num)', 'PostController::edit/$1');
$routes->post('/posts/update/(:num)', 'PostController::update/$1');
$routes->get('/posts/delete/(:num)', 'PostController::delete/$1');
