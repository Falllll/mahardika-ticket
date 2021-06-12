<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/ticket', [AdminController::class, 'ticket']);
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/create', [AdminController::class, 'create']);
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/ticket/{id}', [AdminController::class, 'update']);
    Route::delete('/ticket/{id}', [AdminController::class, 'destroy']);
    Route::delete('/user/{id}', [AdminController::class, 'delete']);
    
    
});


