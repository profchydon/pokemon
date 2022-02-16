<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


use App\Api\V1\Controllers\pokemon\ListPokemon;
use App\Api\V1\Controllers\pokemon\FindPokemon;

$router->group(['prefix' => 'v1'], function () use ($router) {

    $router->group(['middleware' => ['throttle:10,1']], function () use ($router) {
        $router->get('pokemon/all', ListPokemon::class);
        $router->get('pokemon/find/{id}', FindPokemon::class);
    });

});
