<?php

use App\Http\Controllers\RecipeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::resource('recipes', RecipeController::class);

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipes{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::post('/recipes', [RecipeController::class, 'store']);
Route::delete('/recipes{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

require __DIR__.'/auth.php';
