<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {

});
Route::prefix('user')->group(function () {
    Route::get('/login' , [UserController::class , 'login'])->name('user.login');
    Route::post('/login' , [UserController::class , 'login'])->name('user.login');
    Route::get('/logout' , [UserController::class , 'logout'])->name('user.logout');
});
Route::prefix('panel')->group(function () {
    Route::get('/home' , [\App\Http\Controllers\PanelController::class , 'home'])->name('panel.home');
});
