<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('index/admin','HomeEdit::indexedit');

$routes->get('login', 'AdminAuth::login');
$routes->post('login', 'AdminAuth::login');
$routes->get('logout', 'AdminAuth::logout');


$routes->get('product', 'Products::products');
$routes->post('product', 'Products::products');
$routes->get('product/admin','ProductsEdit::productsedit');
$routes->post('product/admin','ProductsEdit::productsedit');


$routes->get('service', 'Service::service');
$routes->post('service', 'Service::service');
$routes->get('service/service/(:any)', 'Service::service/$1');
$routes->post('service/service/(:any)', 'Service::service/$1');
$routes->get('service/admin','ServiceEdit::serviceedit');



