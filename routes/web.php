<?php

/** @var \Laravel\Lumen\Routing\Router $router */
 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    echo "<center> welcome </center>";
});


$router->group([
    "namespace" => "App\Http\Controllers"
], function () use ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->get('register', 'AuthController@register');
    $router->post('me', 'AuthController@me');
});