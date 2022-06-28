<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akaneh extends Controller
{
    public function register(){

        return view('register');
    }public function welcome(){

        return view('welcome');
    }
    public function login(){

        return view('login');
    }
    public function alvin(){

        return view('alvin');
    }
}
