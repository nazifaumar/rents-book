<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'inputRegister'])->name('inputRegister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/inputLogin', [AuthController::class, 'auth'])->name('loginAuth');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/store', [BookController::class, 'storePesan'])->name('store');

Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function()
{
    // dashbord
    Route::get('/', [BookController::class, 'dashboard'])->name('dashboard.admin');
    // user
    Route::get('/user', [AdminController::class, 'user'])->middleware('admin');
    Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::patch('/update/{id}',[AdminController::class,'update'])->name('update');
    Route::delete('/delete/{id}', [AdminController::class, 'destroy']);
    // book
    Route::get('/book', [BookController::class, 'book'])->name('book'); 
    Route::get('/newBook', [BookController::class, 'newBook']); 
    Route::post('/book', [BookController::class, 'add'])->name('add');
    Route::get('/book/{id}', [BookController::class, 'editBook']);
    Route::patch('/updateBook/{id}', [BookController::class, 'update'])->name('updateData');
    // category
    Route::get('/category', [BookController::class, 'category'])->name('category');
    Route::get('/newCategory', [BookController::class, 'newCategory']);
    Route::post('/category', [BookController::class, 'addCategory'])->name('addCategory');
    
    // user akses
    Route::group(['middleware' => 'user'], function(){
        Route::get('/userDash', [UserController::class, 'index'])->name('dashboard.user');
    });

});
