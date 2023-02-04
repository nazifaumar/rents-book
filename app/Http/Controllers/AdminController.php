<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $data = User::where('id', $id)->first();
        return view('dashboard.edit', compact('data'));
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
            'password' => Hash::make($request->password),
            'phone' =>  $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/user');
    }
}
