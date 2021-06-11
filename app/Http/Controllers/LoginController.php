<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('auth.index');
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
