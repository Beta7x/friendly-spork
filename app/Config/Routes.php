<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/posts', 'Post::index');
$routes->get('/posts/create', 'Post::create');
$routes->post('/posts/store', 'Post::store');
$routes->get('/posts/edit/(:num)', 'Post::edit/$1');
$routes->post('/posts/update/(:num)', 'Post::update/$1');
$routes->get('/posts/delete/(:num)', 'Post::delete/$1');