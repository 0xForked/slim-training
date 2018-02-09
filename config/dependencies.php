<?php

/*
|----------------------------------------------------
| Container                                         |
|----------------------------------------------------
*/

$container = $app->getContainer();

/*
|----------------------------------------------------
| ORM                                               |
|----------------------------------------------------
*/

$capsule =  new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();


/*
|----------------------------------------------------
| Controller                                        |
|----------------------------------------------------
*/

$container['TestController'] = function ($container) {
    return new \App\Controllers\TestController($container);
};