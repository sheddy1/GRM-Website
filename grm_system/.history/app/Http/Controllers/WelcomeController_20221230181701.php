<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use hash;

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

    public function check(){

        users::insert('insert into users(name, email, password) values("shad", "shad@gmail.com", "nassp", 1)');
    }

}
