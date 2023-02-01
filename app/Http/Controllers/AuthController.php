<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        User::create($request->all());
        return redirect('/');
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

        Auth::attempt($validate);
        $request->session()->regenerate();
        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        auth()->logout();
        Session()->flush();

        return redirect('/');
    }
}
