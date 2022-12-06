<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Super\SuperController;


Route::get('ahmed',[SuperController::class,'index'])->name('super_index');

Route::get('shwo_single/{id}',[SuperController::class,'show_user'])->name('super_show_all_user');

Route::get('massage/{id}',[SuperController::class,'massage'])->name('super_send_massage');


Route::post('massage/',[SuperController::class,'massage_send'])->name('send_img_for_acdmiya');

Route::get('get_massage',[SuperController::class,'get_massage'])->name('super_get_massage');



 





