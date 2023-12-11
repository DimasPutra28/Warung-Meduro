<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SignController extends Controller
{
    //LOGIN
    public function index()
    {
        return view("login.login");
    }

    //REGISTER
    public function index1()
    {
        return view("login.Register");
    }

    //STORE USER LOGIN REGISTER
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ]);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Pendaftaran berhasil!, silahkan login!');
    }

    // AUTENTIKASI
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('login gagal', ' login gagal Silahkan masukkan ulang');
    }


    // LOGOUT
        public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
