<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

class NationalController extends Controller
{
    function home(){
        return view('national.home');
    }
}
