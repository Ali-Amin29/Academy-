<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormAdminController;
use App\Http\Controllers\Front\UserController;
use Illuminate\Auth\Middleware\CheakSession;

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

  Route::get('index',function(){

    return view('index')->name('register');
});

 Route::prefix('Form')->group(function () {

    Route::get('/one/{state}',[FormAdminController::class ,'first'])->name('one');
    Route::get('/twoo',[FormAdminController::class ,'twoo'])->name('twoo');
    Route::get('/threee',[FormAdminController::class ,'threee'])->name('threee');
    Route::get('/for',[FormAdminController::class ,'for'])->name('for');
    Route::get('/finish',[FormAdminController::class ,'finish'])->name('finish');
    // /////////////////////////////////one////////////////////////

    Route::post('/two',[FormAdminController::class ,'secound'])->name('two');
    // /////////////////////////////////one////////////////////////

Route::middleware(['CheakSession'])->group(function () {
    Route::post('/two2',[FormAdminController::class ,'two2'])->name('two2');
    Route::post('/store_two',[FormAdminController::class ,'store_two'])->name('store_two');
    Route::post('/three',[FormAdminController::class ,'three'])->name('three');
    Route::post('/theam',[FormAdminController::class ,'them'])->name('theam');

});
});
// /////////////////////////////team/////////////////////////////////
Route::get('team',function(){

    return view('admin.team')->name('team');
});



// ////////////////////////////////end tem//////////////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login',function(){
    return view('auth.login');
})->name('login');
 
// ////////////////////////////////end tem////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/',[UserController::class ,'index'])->name('index');
 
Route::get('acdmay_theam/{id}',[UserController::class ,'them'])->name('acdmay_theam');


 








 













