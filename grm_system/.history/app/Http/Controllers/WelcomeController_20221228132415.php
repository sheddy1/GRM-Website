<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function home(){
        return view('main.welcome');
    }

    function register_main(){
        @include('resources.views.main.dbcontroller.blade.php');
        return view('main.register');
    }
}
