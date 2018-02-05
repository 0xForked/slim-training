<?php

/*
|----------------------------------------------------
| Container                                         |
|----------------------------------------------------
*/

$container = $app->getContainer();

/*
|----------------------------------------------------
| Controller                                        |
|----------------------------------------------------
*/

$container['TestController'] = function ($container) {
    return new \App\Controllers\TestController($container);
};