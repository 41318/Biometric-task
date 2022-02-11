<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\RestaurantController;


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
Route::apiResources([
    'cities' => CityController::class,
    'restaurants' => RestaurantController::class,
    'pizzas' => PizzaController::class]);

Route::get('restaurants/{id}/menu', [RestaurantController::class, 'menu']);