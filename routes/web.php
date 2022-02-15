<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pokemon\ListPokemon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// List all pokemon
Route::get('/', ListPokemon::class);

$router->group(['prefix' => 'pokemon'], function () use ($router) {

    

    // List all pokemon
    Route::get('/all', ListPokemon::class);

    // List all pokemon
    // Route::get('/all', ListPokemon::class);



});



