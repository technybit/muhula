<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Dashboard\Home;
use App\Controllers\Dashboard\Reports;
use App\Controllers\Dashboard\Users;
use App\Controllers\Dashboard\Products;
use App\Controllers\Dashboard\Orders;
use App\Controllers\Dashboard\Settings;

/** @var RouteCollection $routes */
//$routes->get('/', 'Home::index');

//Main pages routes
$routes->get('/', 'Pages::home');
$routes->get('/about', 'Pages::about');
$routes->get('/services', 'Pages::services');
$routes->get('/contact', 'Pages::contact');

//Auth routes
service('auth')->routes($routes);

//Dashboard routes
$routes->group('', ['filter' => 'session'], function($routes) {

    $routes->get('dashboard', [Home::class, 'index']);

    $routes->get('reports', [Reports::class, 'index']);

    $routes->get('users', [Users::class, 'index']);

    $routes->get('products', [Products::class, 'index']);

    $routes->get('orders', [Orders::class, 'index']);

    $routes->get('settings', [Settings::class, 'index']);

});
