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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['middleware' => 'client.credentials'], function() use ($router){

    $router->get('/users1', 'User1Controller@getUsers');
    $router->post('/users1', 'User1Controller@addUser');
    $router->get('/users1/{id}', 'User1Controller@show');
    $router->put('/users1/{id}', 'User1Controller@update');
    $router->delete('/users1/{id}', 'User1Controller@delete');
    
    $router->get('/users2', 'User2Controller@getUsers');
    $router->post('/users2', 'User2Controller@addUser');
    $router->get('/users2/{id}', 'User2Controller@show');
    $router->put('/users2/{id}', 'User2Controller@update');
    $router->delete('/users2/{id}', 'User2Controller@delete');

});