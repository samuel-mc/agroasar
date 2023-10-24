<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/agroasar");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/agroasar");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/acerca', function () {
    Flight::render('acerca.php', array('title' => 'Acerca'));
});

Flight::route('/catalogo', function () {
    Flight::render('catalogo.php', array('title' => 'Catálogo de productos'));
});

Flight::route('/servicios', function () {
    Flight::render('servicios.php', array('title' => 'Servicios'));
});

Flight::route('/ganaderia', function () {
    Flight::render('ganaderia.php', array('title' => 'Ganaderia'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});

Flight::route('/gracias', function () {
    Flight::render('gracias.php', array('title' => 'Gracias'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php', array('title' => 'Error'));
});

Flight::start();
