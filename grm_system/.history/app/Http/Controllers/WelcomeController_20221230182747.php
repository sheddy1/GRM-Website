<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use Illuminate\Support\Facades\Hash;

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
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
    }

}
