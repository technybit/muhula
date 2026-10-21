<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Pages::home');
$routes->get('/about', 'Pages::about');
$routes->get('/services', 'Pages::services');
$routes->get('/contact', 'Pages::contact');

service('auth')->routes($routes);
