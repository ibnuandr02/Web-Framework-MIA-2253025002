<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tentang', 'Home::tentang');
$routes->get('contact', 'Home::contact');
$routes->get('semua', 'Home::semua');
$routes->get('unimal', 'Home::unimal');
$routes->get('selamatdatang', 'Home::selamatdatang');
$routes->get('mengapa', 'Home::mengapa');
$routes->get('apa', 'Home::apa');
$routes->get('itera', 'Home::itera');
$routes->get('ubl', 'Home::ubl');
$routes->get('unila', 'Home::unila');

// admin 
$routes->get('/admin/edit/(:any)', 'Blog::edit/$1');
$routes->post('/admin/update/(:num)', 'Blog::update/$1');
$routes->delete('/admin/delete/(:num)', 'Blog::delete/$1');
$routes->post('admin/save', 'Blog::save');
$routes->get('admin', 'Blog::index');
$routes->get ('admin/detail/(:any)', 'Blog::detail/$1');
$routes->get('create', 'Blog::create');

  