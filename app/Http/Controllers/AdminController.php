<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user(){
        $data = User::all();
        return view('dashboard.user', compact('data'));  

    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }
}
