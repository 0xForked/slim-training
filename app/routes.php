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
    $app->get('/v1/posts', 'TestController:getAllData');
    $app->get('/v1/post/{id}', 'TestController:getDataById');
    $app->post('/v1/post', 'TestController:createData');
    $app->post('/v1/post/{id}', 'TestController:updateData');
    $app->delete('/v1/post/{id}','TestController:deleteData');

    //$app->put('/v1/post/{id}', 'TestController:updateData');
    /** dikarenakan ada sedikit masalah untuk itu metode PUT
     * sementara digantikan dengan metode POST
     * untuk lebih jelasnya silahkan baca
     * @link https://github.com/slimphp/Slim/issues/1396
     */