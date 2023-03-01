<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'originalPass' => $request->password,
            'password' => Hash::make($request->password),
            'phone' =>  $request->phone,
            'address' => $request->address,
            'role_id' => 2,
        ]);

        $user->save();

        return redirect('/')->with('danger', 'Yey, Data berhasil di hapus !');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function auth(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|exists:users,name',
            'password' => 'required',
        ], [
            'name.exists' => "This username doesn't exists"
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect()->route('dashboard.admin');
            }
            return redirect()->route('dashboard.user');
       };
    }

    public function logout() 
    {
        auth()->logout();
        Session()->flush();

        return redirect('/');
    }
}