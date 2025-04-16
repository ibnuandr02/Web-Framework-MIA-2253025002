<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('semua', 'Home::semua');
$routes->get('unimal', 'Home::unimal');
$routes->get('selamatdatang', 'Home::selamatdatang');
$routes->get('mengapa', 'Home::mengapa');
$routes->get('apa', 'Home::apa');

