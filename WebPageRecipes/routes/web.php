<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavegationController;
use App\Http\Controllers\UserController;
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
Route::get('/', [NavegationController::class, 'welcom'])->name('welcomUser');
Route::get('/IniciarSesion', [NavegationController::class, 'signUp'])->name('signInUser');
Route::post('/InicioSesion', [UserController::class, 'verifyUser'])->name('signInAdmin');
