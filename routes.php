<?php

// Create Router instance
$router = new Router();

// ('x', 'y') => x = chemin vers la vue(nom du fichier); y = nom du controller @ nom de la fonction

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');

$router->get('/contact', 'PagesController@contact');
$router->post('/contact', 'PagesController@contact');

$router->get('/ajout-article', 'ArticlesController@ajout');
$router->post('/ajout-article', 'ArticlesController@save');


// Run it!
$router->run(); 