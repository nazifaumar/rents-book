<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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
// coba tambahin error validate di loginya, iya aku juga mw solat dlu,😘
//bentar beb oke sayang
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'inputRegister'])->name('inputRegister');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/inputLogin', [AuthController::class, 'auth'])->name('loginAuth');
Route::get('/logout', [AuthController::class, 'logout']);


Route::post('/store', [BookController::class, 'storePesan'])->name('store');

Route::get('/dashboard', [BookController::class, 'dashboard'])->name('dashboard.index');