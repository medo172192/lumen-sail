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
// $router->get('/', "Modules\App\App\Http\Controllers\TestModuleController@index");

// $router->get('/version', function () use ($router) {
//     return $router->app->version();
// });
// $router// Route::post('logout', 'AuthController@logout');

// Route::post('logout', 'AuthController@logout');
// Route::post('refresh', 'AuthController@refresh');
// Route::post('user-profile', 'AuthController@me');