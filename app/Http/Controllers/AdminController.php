<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // public function dashboardIndex(){
    //     $userr = User::all();
    //     return view('dashboard.index', compact('userr'));
    // }

    public function user()
    {
        $data = User::latest()->simplePaginate(7);
        return view('dashboard.user', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        User::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Yey, Data berhasil di hapus !');
    } 


    public function edit($id)
    {
        $user = User::find($id);

        return response()->json([
            'data' => $user
        ]);
        // ini ngembaliin data user dalam bentuk json, karna modal itu dinamis jadi harus pake json, 
        //kan idnya sama jadi gak usah pake where lagi, trus di find juga.
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'originalPass' => $request->password,
            'password' => Hash::make($request->password),
            'phone' =>  $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/user');
    }
}
