<?php

use Illuminate\Support\Facades\Route;

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
use \App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, "showAll"]);

Route::get('/users', function(){\App\Models\User::all();});

Route::get('/a', [\App\Http\Controllers\Controller::class], 'index'
);
