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
Route::get('games',[GamesController::class,'index']);
Route::resource('Games', GamesController::class);
 Route::resource('Game_detalis', DetalisGameController::class);



Route::resource('About', AboutController::class);
Route::resource('Team', TeamController::class);

});

Route::resource('Chat', ChatControllr::class);

 


