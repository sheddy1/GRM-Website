<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use App\Models\grieviance;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

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
            ->where('state1', $request->stateid)
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

        $zones1 = \DB::table('zones')
        ->where('state1', $request->stateid)
        ->value('zone1');

        session::put('zone', $zones1);

        if(count($zones) > 0){
            return response()->json($zones);
        }
    }

    public function getwards(Request $request){
        $wards = \DB::table('wards')
        ->where('lga', $request->lga)
        ->get();

        $wards1 = \DB::table('wards')
        ->where('lga', $request->lga)
        ->value('ward');

        session::put('ward', $wards1);

        if(count($wards) > 0){
            return response()->json($wards);
        }
    }

    public function getcomms(Request $request){
        $comm = \DB::table('communities')
        ->where('ward', $request->ward)
        ->get();

        // if(empty($comm)){
        //     return response()->json("not working");
        // }
        // else{
        //     $comm2 = \DB::table('communities')
        // ->where('ward', $request->ward)
        // ->get();

        //     if(count($comm2) > 0){
        //         return response()->json($comm2);
        //     }
        // }

        $comm1 = \DB::table('communities')
        ->where('ward', $request->ward)
        ->value('ward');

        session::put('comm', $comm1);

        if(count($comm) > 0){
            return response()->json($comm);
        }
    }

    public function homeRegister(Request $request){
        $request->validate([
            'zone'=>'required',
            'state_select'=>'required',
            'lga_select'=>'required',
            'ward'=>'required',
            // 'community'=>'required',
            'beneficiary'=>'required',
            'name'=>'required|string',
            'gender'=>'required',
            'age'=>'required|integer',
            'phone'=>'required|integer',
            'email'=>'required',
            'description'=>'required'
        ]);

        //inserting the data
        $grieviance = new grieviance;
        $grieviance->zone = $request->zone;
        $grieviance->state = $request->state_select;
        $grieviance->lga = $request->lga_Select;
        $grieviance->ward = $request->ward;
        $grieviance->community = $request->community;
        $grieviance->beneficiary = $request->beneficiary;
        $grieviance->name = $request->name;
        $grieviance->gender = $request->gender;
        $grieviance->age = $request->age;
        $grieviance->phone = $request->phone;
        $grieviance->email = $request->email;
        $grieviance->desc = $request->description;
        $save = $grieviance->save();

        if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
            return back()->with('fail', 'something went wrong try again');
        }

    }

}
