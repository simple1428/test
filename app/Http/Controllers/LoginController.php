<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{ 
    public function index()
    {
        return view('auth.login');
    } 
    public function auth(Request $request)
    {
        
        $data = $request->validate([ 
            'email' => 'required|email:dns',
            'password' => 'required',
        ]) ; 
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/');
        }
    }
 
}