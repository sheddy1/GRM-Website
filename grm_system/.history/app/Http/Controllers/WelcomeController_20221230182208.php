<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use hash;

use App\Models\user;

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
        //inserting the data
        $admin = new user();
        $admin->name = "hamma NAsiru";
        $admin->email = "hamma@nassp.gov.ng";
        $admin->password = Hash::make("nassp");
        $admin->position = 1;
        $save = $admin->save();

        if($save){
            return back()->with('success', 'New user has been inserted into db');
        }
        else{
            return back()->with('fail','Something went wrong try again oh');
        }
    }

}
