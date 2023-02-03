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

    public function getLgas(Request $request)
    {
        // $states = \DB::table('lgas')
        // ->where('state1', $request->state1)
        // ->get();

        $states = lgas::where("state1", $request->state_select)->get()->pluck("lga","lgan");

        // if(count($states) > 0){
        //     return response()->json($states);
        // }

        return response()->json($states);
    }
}
