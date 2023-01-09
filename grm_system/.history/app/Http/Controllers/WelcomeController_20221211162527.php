<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function home(){
        return view('main.welcome');
    }

    function register(){
        return view('main.register');
    }
}
