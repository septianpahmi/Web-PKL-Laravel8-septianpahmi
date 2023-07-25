<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index (){
        return view('auth.login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');
        }else{
            return redirect('')->withErrors('Email dan password salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
