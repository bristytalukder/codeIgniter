<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('about', 'Home::ab');
$routes->get('product', 'Product::pd');  //1st product=page, 2nd Product=controller, 3rd pd=function name



