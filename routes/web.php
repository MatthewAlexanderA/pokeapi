<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PageController;

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

Route::resource('/', PokemonController::class);
Route::resource('pokemons', PokemonController::class);

Route::post('pokemon', [PokemonController::class, 'search'])->name('search');

Route::post('pokemons', [PageController::class, 'link'])->name('link');
