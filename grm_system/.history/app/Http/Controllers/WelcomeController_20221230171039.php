<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use hash;

use session;

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

    public function check(Request $request){
        $request->validate([
            'email' => 'required|"@nassp.gov.ng"',
            'password' => 'required|"@nassp.gov.ng"'
        ]);
    }
}
