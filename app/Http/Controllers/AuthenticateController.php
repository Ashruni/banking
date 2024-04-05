<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticateController extends Controller
{
    public function register(){
        $credentials = request()->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email',
            'password'=>'required|string|min:8|max:50'
        ]);
        // DD($credentials);
        if($credentials){
            User::create($credentials);
            // dd(session());
            session()->flash('success', 'Registration successful!');
            return redirect()->route('login');
            // return view('auth.login')->with('success', 'Success message here');
        }
        else{
            // return view('auth.login')->with('success', 'Success message here');

        }
    }
    public function login(){
        return view('auth.login');
    }
}
