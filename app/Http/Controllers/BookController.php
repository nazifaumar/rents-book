<?php

namespace App\Http\Controllers;

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
}
