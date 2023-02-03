<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    function home(){
        return view('main.welcome');
    }

    function register_main(){
        // $lga = lga::table('lga')->get();
        // , compact('countries')
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

        $email = user::where('email', '=', $request->email)->first();

        if(!$email)
        {
            return back()->with('fail', 'email not recognised');
        }
        else{
            if(Hash::check($request->password, $email->password))
            {
                if($email->position ==1)
                {
                    $request->session()->put('loggeduser', $email->id);
                    return redirect('national_homepage');
                }
                else if($email->position ==2)
                {
                    $request->session()->put('loggeduser', $email->id);
                    return redirect('national_homepage');
                }

            }
            else
            {
                return back()->with('fail', 'incorrect password');
            }
        }
    }

    public function getLgas(Request $request)
    {

        $states = \DB::table('lgas')
            ->where('state1', 'abuja')
            ->get();

        if (count($states) > 0) {
            return response()->json($states);
        }

    }

    public function getzones(Request $request)
    {
        $zones = \DB::table('zones')
        ->where('state1', $request->stateid)
        ->get();

        if(count($zones) > 0){
            return response()->json($states);
        }
    }

}
