<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('products', 'Products::index');       // Route untuk Products
$routes->get('about', 'About::index');            // Route untuk About Us
$routes->get('contact', 'Contact::index');        // Route untuk Contact
$routes->post('contact/send', 'Contact::send');   // Route untuk form contact