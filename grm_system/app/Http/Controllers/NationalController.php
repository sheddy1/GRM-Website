<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use App\Mail\grieve;

use App\Models\grieviance;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

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

    public function getCategory(Request $request)
    {

        $states = \DB::table('grieviance_category')
            ->where('category', $request->category)
            ->get();

        if (count($states) > 0) {
            return response()->json($states);
        }

    }

    public function nationalRegister(Request $request){
        $request->validate([
            //'zone'=>'required',
            'info_state'=>'required',
            'info_lga'=>'required',
            'info_ward'=>'required',
            'info_community'=>'required',
            'info_beneficiary'=>'required',
            'info_cname'=>'required',
            'info_cphone'=>'required',
            'info_gender'=>'required',
            'info_category'=>'required',
            'info_cmode'=>'required',
            'info_cemail'=>'required',
            'info_resolved'=>'required',
            'info_subcat'=>'required',
            'info_rescomment'=>'required',
            'info_desc'=>'required',
            'info_age'=>'required'
        ]);

        //getting the tracking number
        $desired_length = 10;
        $unique = uniqid();

        $str = substr($unique, 0, $desired_length);

        //inserting the data
        $grieviance = new grieviance;
        $grieviance->zone = $request->info_zone;
        $grieviance->state = $request->info_state;
        $grieviance->lga = $request->info_lga;
        $grieviance->ward = $request->info_ward;
        $grieviance->community = $request->info_community;
        $grieviance->beneficiary = $request->info_beneficiary;
        $grieviance->name = $request->info_cname;
        $grieviance->gender = $request->info_gender;
        $grieviance->age = $request->info_age;
        $grieviance->phone = $request->info_cphone;
        $grieviance->email = $request->info_cemail;
        $grieviance->desc = $request->info_desc;
        $grieviance->category = $request->info_category;
        $grieviance->sub_category = $request->info_subcat;
        $grieviance->cmode = $request->info_cmode;
        $grieviance->resolved = $request->info_resolved;
        $grieviance->rescomment = $request->info_rescomment;
        $grieviance->track = $str;
        $save = $grieviance->save();

        $details = [
            'title' => 'Recieved Grieviance',
            'body' => '
                We have recieved your grieviance and we would like to appologize, for any
                inconvinience this has cause you, please hold on while we sought out your
                grieviance. a tracking number for this grieviance has been included in this mail,
                which you can use to track this grieviance whenever you wish to thank you
            ',
            'track'=> $str,
            'zone'=> $request->info_zone,
            'state'=> $request->info_state,
            'lga'=> $request->info_lga,
            'ward'=> $request->info_ward,
            'community'=> $request->info_community,
            'ben'=> $request->info_beneficiary,
            'name'=> $request->info_cname,
            'gender'=> $request->info_gender,
            'age'=> $request->info_age,
            'phone'=> $request->info_cphone,
            'email'=> $request->info_cemail,
            'desc'=> $request->info_desc,
            'category'=> $request->info_category,
            'subcat'=> $request->info_subcat,
            'cmode'=> $request->info_cmode,
            'resolved'=> $request->info_resolved,
            'rescomment'=> $request->info_rescomment,
        ];

        Mail::to($request->info_cemail, "sgodwin@nassp.gov.ng")->send(new grieve($details));

       if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
           return back()->with('fail', 'something went wrong try again');
        }
    }

}
