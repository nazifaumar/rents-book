<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function storePesan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($request->all());
        return redirect('/');
    }

    public function dashboard(){
        $userr = User::all();
        return view('dashboard.index', compact('userr'));
    }

    public function book(){
        $book = Book::all();
        return view('dashboard.book.index', compact('book'));
    }

    public function newBook(){
        return view ('dashboard.book.form');
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        Book::create([
            'title'=> $request->title,
            'writer'=> $request->writer,
            'publisher'=> $request->publisher,
            'synopsis'=> $request->synopsis,
            'image'=> $image,
        ]);
        return redirect('book')->with('success', 'berhasil membuat !');
    }

    public function editUser($id){
        $book = Book::where('id',$id)->first();
        return view ('dashboard.book.index', compact('book'));
    }

    public function updateUser(Request $request , $id){

        Book::where('id',$id)->update([
            'title'=> $request->title,
            'writer'=> $request->writer,
            'publisher'=> $request->publisher,
            'synopsis'=> $request->synopsis,
            'image'=> $request->image,
        ]);
        return redirect('book')->with('success', 'berhasil membuat !');
    }


    public function category(){
        return view('dashboard.category.index');
    }

    public function addCategory(){
        
    }

    public function newCategory(){
        return view('dashboard.category.form');
    }
}
