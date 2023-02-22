<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GamesController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\IndexControler;
use App\Http\Controllers\Admin\ChatControllr;
 
use App\Http\Controllers\Admin\DetalisGameController;



Route::middleware(['auth','CheakState'])->group(function () {

Route::view('/', 'dashbort.index')->name('admin.dashbord');
Route::get('dashbord_admin',[IndexControler::class,'index'])->name('dashbord_admin');
Route::get('games',[GamesController::class,'index'])->name('games');
Route::resource('Games', GamesController::class);
// ////////////////////////////////////////////////////////////////
Route::get('Game_detalis_index/{id}',[DetalisGameController::class,'index'])->name('Game_detalis_index');

Route::get('Game_detalis_create/{id}',[DetalisGameController::class,'create'])->name('Game_detalis_create');
Route::post('Game_detalis_store',[DetalisGameController::class,'store'])->name('Game_detalis_store');
Route::get('Game_detalis/{id}', [DetalisGameController::class,'show'])->name('DetalisGame_index_show');
  



Route::resource('About', AboutController::class);
Route::resource('Team', TeamController::class);

});

Route::resource('Chat', ChatControllr::class);

 


