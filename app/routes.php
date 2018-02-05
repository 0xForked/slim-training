<?php

/*
|----------------------------------------------------
| Routing sytem                                     |
|----------------------------------------------------
*/

/**
 * Route version without controller (example)
 * $app->get('/', function($request, $response){
 *     Menampilkan twig template
 *     return $this->view->render($response, 'home.twig');
 * })
 *
*/

    //route view with controller
    $app->get('/', 'TestController:index')->setName('Home');