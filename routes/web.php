<?php

use App\Http\Controllers\GamesController;
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
    // return view('welcome');
    return "Main page";
});

Route::get('/games', [GamesController::class, 'index'])->name('gamesIndex');
Route::get('/games/create', [GamesController::class, 'create'])->name('gameCreate');
Route::get('/games/{game_id}', [GamesController::class, 'editGame'])->name('editGame');
Route::get('/games/delete/{game_id}', [GamesController::class, 'deleteGame'])->name('deleteGame');

Route::post('/games/storegame', [GamesController::class, 'storeGame'])->name('createGame');
Route::post('/games/updategame', [GamesController::class, 'updateGame'])->name('updateGame');

