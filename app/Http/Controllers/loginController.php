<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(){
        return redirect()->route('home');
    }

    public function logout(){
        return redirect()->route('login');
    }
}
