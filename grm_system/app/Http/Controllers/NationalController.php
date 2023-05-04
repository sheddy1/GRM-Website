<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use Illuminate\Support\Facades\DB;

class NationalController extends Controller
{
    function home(){
        return view('national.home');
    }

    function register(){
        return view('national.register');
    }

    function list(){
        return view('national.list');
    }

    function reports(){
        return view('national.reports');
    }

    function gro(){
        return view('national.gro');
    }

    public function nationalRegister(Request $request){
        $request->validate([
            'zone'=>'required',
            'state_select'=>'required',
            'lga_select'=>'required',
            'ward'=>'required'
            
        ]);

        return("God is good");
        

    }

}
