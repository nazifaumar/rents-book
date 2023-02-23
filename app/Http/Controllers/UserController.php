<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $book = Book::all();
        return view('user.index', compact('book'));
    }
}
