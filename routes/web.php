<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\LoginController;
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

Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('auth/login', [LoginController::class, 'store']);


Route::get('auth/register', [LoginController::class, 'index'])->name('register');
Route::post('auth/register', [LoginController::class, 'store']);


Route::get('/componentes/create', [ComponentController::class, 'index'])->name('componentes.create');
Route::post('/componentes/create', [ComponentController::class, 'store']);
