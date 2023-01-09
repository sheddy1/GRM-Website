<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function home(){
        return view('main.welcome');
    }

    function register_main(){
        return view('main.register');
    }

    function login(){
        return view('main.login');
    }

    function check(Request $request){
        $request->validate([[
            'email' => 'required|"@nassp.gov.ng"',
        ]]);
    }
}
