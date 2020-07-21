<?php

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

// route home avec la liste
$router->get(
    '/',
    [
        'uses' => 'MainController@list',
        'as' => 'main-list'
    ]
);

$router->get(
    '/{pokemonNumber}/stats',
    [
        'uses' => 'StatsController@item',
        'as' => 'stats-item'
    ]
);

$router->get(
    '/types',
    [
        'uses' => 'TypeController@list',
        'as' => 'type-list'
    ]
);

$router->get(
    '/type/{typeId}',
    [
        'uses' => 'TypeController@matchType',
        'as' => 'type-match'
    ]
);
