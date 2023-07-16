<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }
 
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'telepon' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
        ]) ; 
        $data['password'] = bcrypt($request->password);
 
        User::create($data);
        return redirect('/login')->with(['success' => 'Registrasi berhasil!']);
    }
  
}