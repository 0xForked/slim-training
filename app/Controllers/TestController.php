<?php

namespace App\Controllers;

class TestController extends Controller {

    public function index($request, $response) {

        $response->getBody()->write("Hello Slim With Controller");
        return $response;

    }

}