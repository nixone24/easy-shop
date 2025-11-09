<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('auth', function (RouteCollection $routes){
    $routes->match(['get','post'], 'login', 'Auth::login');
});

$routes->group('auth', function (RouteCollection $routes){
    $routes->match(['get','post'], 'register', 'Genre::register');
    $routes->post('Genre/save', 'Genre::save');

});



$routes->group('admin', function (RouteCollection $routes) {
    $routes->match(['get', 'post'], 'dashboard', 'Admin::dashboard');
    $routes->match(['get', 'post'], 'profile', 'Admin::profile');
    $routes->match(['get', 'post'], 'listGenre', 'Admin::listGenre');
});



