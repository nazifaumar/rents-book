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
        ]);

        $user->save();

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

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
       };
       return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        Session()->flush();

        return redirect('/');
    }
}
