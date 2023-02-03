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

    public function view()
    {
        $countries = \DB::table('lgas')
            ->get();

        return view('dropdown', compact('countries'));
    }
}
