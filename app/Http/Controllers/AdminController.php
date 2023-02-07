<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function user()
    {
        // kalau mau tampilan paginatenya simple pake simplePaginate(), defau
        $data = User::latest()->simplePaginate(15);
        return view('dashboard.user', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);

        return response()->json([
            'data' => $user
        ]);// ini ngembaliin data si user dalam bentuk json, json itu data, karna modal itu dinamis jadi harus pake json, kan idnya sama jadi gak usah pake where lagi, trus di find juga.
    // coba liat url /edit/1 , ada apa?, benerrrrr itu di ubah ubah id di urlnya bisa dapetin data user. (/edit/{id})
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
