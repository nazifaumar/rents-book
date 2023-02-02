<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
// DASHBOARD 
Route::get('/dashIndex', function () {
    return view('dashboard.index');
});
Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rentLog', function () {
    return view('dashboard.rentLog');
});
// REGISTER
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'inputRegister'])->name('inputRegister');
//LOGIN-LOGOUT
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/inputLogin', [AuthController::class, 'auth'])->name('loginAuth');
Route::get('/logout', [AuthController::class, 'logout']);
//PESAN
Route::post('/store', [BookController::class, 'storePesan'])->name('store');
//DASHBOARD
Route::get('/dashboard', [BookController::class, 'dashboard'])->name('layouts.main');
Route::get('/user', [AdminController::class, 'user']);

Route::delete('/delete/{id}', [AdminController::class, 'destroy']);