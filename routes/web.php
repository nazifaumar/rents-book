<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/rentLog', [AdminController::class, 'rentLog']);
Route::get('/book', [AdminController::class, 'book']);
Route::get('/category', [AdminController::class, 'category']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'inputRegister'])->name('inputRegister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/inputLogin', [AuthController::class, 'auth'])->name('loginAuth');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/store', [BookController::class, 'storePesan'])->name('store');


Route::get('/dashboard', [BookController::class, 'dashboard'])->name('dashboard.index')->middleware('auth');
Route::get('/user', [AdminController::class, 'user'])->middleware('admin');
Route::delete('/delete/{id}', [AdminController::class, 'destroy']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::patch('/update/{id}',[AdminController::class,'update'])->name('update');
Route::get('/book', [BookController::class, 'book'])->name('book');
Route::get('/newBook', [BookController::class, 'newBook']);
Route::post('/book', [BookController::class, 'add'])->name('add');
Route::get('/editUser/{id}', [BookController::class, 'editUser'])->name('editUser');

Route::get('/userDash', [UserController::class, 'index'])->middleware(['auth'])->middleware(['user']);
Route::post('/updateUser/{id}', [BookController::class, 'editUser'])->name('updateUser');


Route::get('/category', [BookController::class, 'category'])->name('category');
Route::get('/newCategory', [BookController::class, 'newCategory']);
Route::post('/category', [BookController::class, 'addCategory'])->name('addCategory');