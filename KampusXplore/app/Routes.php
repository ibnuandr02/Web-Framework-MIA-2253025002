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

// admin 
$routes->post('admin/save', 'Blog::save');
$routes->get('admin', 'Blog::index');
$routes->get ('admin/detail/(:any)', 'Blog::detail/$1');
$routes->get('create', 'Blog::create');
