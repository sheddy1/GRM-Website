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

use Cookie;

use Twilio\Rest\Client;

//use Maatwebsite\Excel\Facades\Excel;

use App\Exports\listExport;
use App\Exports\categoryExport;
use Excel;

class NationalController extends Controller
{
    function home(Request $request){
        //return view('national.home');

        $id =  $request->session()->get('loggeduser');

        $name = user::where('user_id', $id)->value('fname');

        $lname = user::where('user_id', $id)->value('lname');

        $title = user::where('user_id', $id)->value('title');

        $lname_first = $lname[0];

        $resolved = grieviance::where('resolved', '=', 'yes')->count();

        $review = grieviance::where('resolved', '=', 'no')->count();

        $new = grieviance::where('attended', '=', 0)->count();

        $total_grieviance = DB::table('grieviances')->count();

        $resolved_month = Session::get('chart_date');

        $resolved_chart = grieviance::where('resolved', '=', 'yes')->where('created_at', '=', $resolved_month)->count();

        $date = date("Y/m/d");

        $month = date('F', strtotime($date));

        //echo $name;

        //grieviance category code

        $cat1 = grieviance::where('category', '=', 'wrongful_inclusion_exclusion')->count();
        $cat2 = grieviance::where('category', '=', 'payments_and_payment_service_delivery')->count();
        $cat3 = grieviance::where('category', '=', 'nassp_service_delivery_issues')->count();
        $cat4 = grieviance::where('category', '=', 'fraud_and_corruption_issues')->count();
        $cat5 = grieviance::where('category', '=', 'data_errors_and_updates')->count();
        $cat6 = grieviance::where('category', '=', 'inquiries_and_information_requests')->count();
        $cat7 = grieviance::where('category', '=', 'other')->count();
        $cat8 = grieviance::where('category', '=', 'abuse_and_social_issues')->count();

        $cat_total = $cat1 + $cat2 + $cat3 + $cat4 + $cat5 + $cat6 + $cat7 + $cat8;

        $cat1_per1 = ($cat1/$cat_total) * 100;

        $cat2_per1 = ($cat2/$cat_total) * 100;

        $cat3_per1 = ($cat3/$cat_total) * 100;

        $cat4_per1 = ($cat4/$cat_total) * 100;

        $cat5_per1 = ($cat5/$cat_total) * 100;

        $cat6_per1 = ($cat6/$cat_total) * 100;

        $cat7_per1 = ($cat7/$cat_total) * 100;

        $cat8_per1 = ($cat8/$cat_total) * 100;

        //rounding up to two decimal places
        $cat1_per = number_format((float)$cat1_per1, 2, '.', '');
        $cat2_per = number_format((float)$cat2_per1, 2, '.', '');
        $cat3_per = number_format((float)$cat3_per1, 2, '.', '');
        $cat4_per = number_format((float)$cat4_per1, 2, '.', '');
        $cat5_per = number_format((float)$cat5_per1, 2, '.', '');
        $cat6_per = number_format((float)$cat6_per1, 2, '.', '');
        $cat7_per = number_format((float)$cat7_per1, 2, '.', '');
        $cat8_per = number_format((float)$cat8_per1, 2, '.', '');


        //end of grieviance category code

        //grieviance complaint mode

        $mode1 = grieviance::where('cmode', '=', 'in_person')->count();
        $mode2 = grieviance::where('cmode', '=', 'email')->count();
        $mode3 = grieviance::where('cmode', '=', 'phone')->count();
        $mode4 = grieviance::where('cmode', '=', 'online')->count();

        $mode_total = $mode1 + $mode2 + $mode3 + $mode4;

        $mode1_per1 = ($mode1/$mode_total) * 100;
        $mode2_per1 = ($mode2/$mode_total) * 100;
        $mode3_per1 = ($mode3/$mode_total) * 100;
        $mode4_per1 = ($mode4/$mode_total) * 100;

        $mode1_per= number_format((float)$mode1_per1, 2, '.', '');
        $mode2_per= number_format((float)$mode2_per1, 2, '.', '');
        $mode3_per= number_format((float)$mode3_per1, 2, '.', '');
        $mode4_per= number_format((float)$mode4_per1, 2, '.', '');

        //end grieviance complaint mode

        //nigeria map code

        $abia = grieviance::where('state', '=', 'abia')->count();
        $adamawa = grieviance::where('state', '=', 'adamawa')->count();
        $akwa_ibom = grieviance::where('state', '=', 'akwa-ibom')->count();
        $anambra = grieviance::where('state', '=', 'anambra')->count();
        $bauchi = grieviance::where('state', '=', 'bauchi')->count();
        $bayelsa = grieviance::where('state', '=', 'bayelsa')->count();
        $benue = grieviance::where('state', '=', 'benue')->count();
        $borno = grieviance::where('state', '=', 'borno')->count();
        $cross_river = grieviance::where('state', '=', 'cross-river')->count();
        $delta = grieviance::where('state', '=', 'delta')->count();
        $ebonyi = grieviance::where('state', '=', 'ebonyi')->count();
        $edo = grieviance::where('state', '=', 'edo')->count();
        $ekiti = grieviance::where('state', '=', 'ekiti')->count();
        $enugu = grieviance::where('state', '=', 'enugu')->count();
        $gombe = grieviance::where('state', '=', 'gombe')->count();
        $imo = grieviance::where('state', '=', 'imo')->count();
        $jigawa = grieviance::where('state', '=', 'jigawa')->count();
        $kaduna = grieviance::where('state', '=', 'kaduna')->count();
        $kano = grieviance::where('state', '=', 'kano')->count();
        $katsina = grieviance::where('state', '=', 'katsina')->count();
        $kebbi = grieviance::where('state', '=', 'kebbi')->count();
        $kogi = grieviance::where('state', '=', 'kogi')->count();
        $kwara = grieviance::where('state', '=', 'kwara')->count();
        $lagos = grieviance::where('state', '=', 'lagos')->count();
        $nasarawa = grieviance::where('state', '=', 'nasarawa')->count();
        $niger = grieviance::where('state', '=', 'niger')->count();
        $ogun = grieviance::where('state', '=', 'ogun')->count();
        $ondo = grieviance::where('state', '=', 'ondo')->count();
        $osun = grieviance::where('state', '=', 'osun')->count();
        $oyo = grieviance::where('state', '=', 'oyo')->count();
        $plateau = grieviance::where('state', '=', 'plateau')->count();
        $rivers = grieviance::where('state', '=', 'rivers')->count();
        $sokoto = grieviance::where('state', '=', 'sokoto')->count();
        $taraba = grieviance::where('state', '=', 'taraba')->count();
        $yobe = grieviance::where('state', '=', 'yobe')->count();
        $zamfara = grieviance::where('state', '=', 'zamfara')->count();
        $fct = grieviance::where('state', '=', 'fct')->count();
        //end of nigeria map code

        return view('national.home', [
            'name'=>$name,
            'lname'=>$lname,
            'lname_first'=>$lname_first,
            'title'=>$title,
            'resolved' => $resolved,
            'review' => $review,
            'new' => $new,
            'total_grieviance' => $total_grieviance,
            'month' => $month,
            //grieviace category variable
            'cat1' => $cat1,
            'cat2' => $cat2,
            'cat3' => $cat3,
            'cat4' => $cat4,
            'cat5' => $cat5,
            'cat6' => $cat6,
            'cat7' => $cat7,
            'cat8' => $cat8,

            'cat1_per' => $cat1_per,
            'cat2_per' => $cat2_per,
            'cat3_per' => $cat3_per,
            'cat4_per' => $cat4_per,
            'cat5_per' => $cat5_per,
            'cat6_per' => $cat6_per,
            'cat7_per' => $cat7_per,
            'cat8_per' => $cat8_per,
            //end grieviace category variable

            //mode vairiables
            'mode1' => $mode1,
            'mode2' => $mode2,
            'mode3' => $mode3,
            'mode4' => $mode4,

            'mode1_per' => $mode1_per,
            'mode2_per' => $mode2_per,
            'mode3_per' => $mode3_per,
            'mode4_per' => $mode4_per,
            //end of mode vairiables

            //nideria states code
            'abia'=> $abia,
            'adamawa'=> $adamawa,
            'akwa_ibom'=> $akwa_ibom,
            'anambra'=> $anambra,
            'bauchi'=> $bauchi,
            'bayelsa'=> $bayelsa,
            'benue'=> $benue,
            'borno'=> $borno,
            'cross_river'=> $cross_river,
            'delta'=> $delta,
            'ebonyi'=> $ebonyi,
            'edo'=> $edo,
            'ekiti'=> $ekiti,
            'enugu'=> $enugu,
            'gombe'=> $gombe,
            'imo'=> $imo,
            'jigawa'=> $jigawa,
            'kaduna'=> $kaduna,
            'kano'=> $kano,
            'katsina'=> $katsina,
            'kebbi'=> $kebbi,
            'kogi'=> $kogi,
            'kwara'=> $kwara,
            'lagos'=> $lagos,
            'nasarawa'=> $nasarawa,
            'niger'=> $niger,
            'ogun'=> $ogun,
            'ondo'=> $ondo,
            'osun'=> $osun,
            'oyo'=> $oyo,
            'plateau'=> $plateau,
            'rivers'=> $rivers,
            'sokoto'=> $sokoto,
            'taraba'=> $taraba,
            'yobe'=> $yobe,
            'zamfara'=> $zamfara,
            'fct'=> $fct,

        ]);
    }

    function register(Request $request){
        $id =  $request->session()->get('loggeduser');

        $name = user::where('user_id', $id)->value('fname');

        $lname = user::where('user_id', $id)->value('lname');

        $title = user::where('user_id', $id)->value('title');

        $lname_first = $lname[0];
        return view('national.register', [
            'name'=>$name,
            'lname'=>$lname,
            'lname_first'=>$lname_first,
            'title'=>$title
        ]);
    }

    function national_list(Request $request){
        $id =  $request->session()->get('loggeduser');

        $grieviance = DB::table('grieviances')->get();

        $name = user::where('user_id', $id)->value('fname');

        $lname = user::where('user_id', $id)->value('lname');

        $title = user::where('user_id', $id)->value('title');

        $lname_first = $lname[0];

        $total_grieviance = DB::table('grieviances')->count();

        $resolved = grieviance::where('resolved', '=', 'yes')->count();

        $review = grieviance::where('resolved', '=', 'no')->count();

        $new = grieviance::where('attended', '=', 0)->count();

        return view('national.list', [
            'name'=>$name,
            'lname'=>$lname,
            'lname_first'=>$lname_first,
            'title'=>$title,
            'grieviance' => $grieviance,
            'total_grieviance' => $total_grieviance,
            'resolved' => $resolved,
            'resolved' => $resolved,
            'review' => $review,
            'new' => $new,
        ]);
    }

    function national_reports(Request $request){
        $id =  $request->session()->get('loggeduser');

        $grieviance = DB::table('grieviances')->get();

        $name = user::where('user_id', $id)->value('fname');

        $lname = user::where('user_id', $id)->value('lname');

        $title = user::where('user_id', $id)->value('title');

        //category summary code

        $cat_state = session::get('cat_state');

        //echo $cat_state;

        //echo "zdzasa";

        $cat1 = grieviance::where('category', '=', 'wrongful_inclusion_exclusion')->where('state', '=', $cat_state)->count();
        $cat2 = grieviance::where('category', '=', 'payments_and_payment_service_delivery')->where('state', '=', $cat_state)->count();
        $cat3 = grieviance::where('category', '=', 'nassp_service_delivery_issues')->where('state', '=', $cat_state)->count();
        $cat4 = grieviance::where('category', '=', 'fraud_and_corruption_issues')->where('state', '=', $cat_state)->count();
        $cat5 = grieviance::where('category', '=', 'data_errors_and_updates')->where('state', '=', $cat_state)->count();
        $cat6 = grieviance::where('category', '=', 'inquiries_and_information_requests')->where('state', '=', $cat_state)->count();
        $cat7 = grieviance::where('category', '=', 'other')->where('state', '=', $cat_state)->count();
        $cat8 = grieviance::where('category', '=', 'abuse_and_social_issues')->where('state', '=', $cat_state)->count();

        $lname_first = $lname[0];

        $date = date("Y/m/d");

        $month = date('F', strtotime($date));

        //echo $cat3;

        return view('national.reports', [
            'name'=>$name,
            'lname'=>$lname,
            'lname_first'=>$lname_first,
            'title'=>$title,
            'cat1'=>$cat1,
            'cat2'=>$cat2,
            'cat3'=>$cat3,
            'cat4'=>$cat4,
            'cat5'=>$cat5,
            'cat6'=>$cat6,
            'cat7'=>$cat7,
            'cat8'=>$cat8,
            'month' => $month
        ]);
    }

    function gro(Request $request){
        $id =  $request->session()->get('loggeduser');

        $grieviance = DB::table('grieviances')->get();

        $name = user::where('user_id', $id)->value('fname');

        $lname = user::where('user_id', $id)->value('lname');

        $title = user::where('user_id', $id)->value('title');

        $lname_first = $lname[0];

        return view('national.gro', [
            'name'=>$name,
            'lname'=>$lname,
            'lname_first'=>$lname_first,
            'title'=>$title
        ]);

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

    public function list_download(Request $request)
    {
        $data = $request->info_share;

         if($data == "excel"){
            return Excel::download(new listExport, 'employeelist.xlsx');
         }
         else{
            return Excel::download(new listExport, 'employeelist.csv');
         }
    }

    public function nationalRegister(Request $request){
        $request->validate([
            //'zone'=>'required',
            'info_state'=>'required',
            'info_lga'=>'required',
            'info_ward'=>'required',
            //'info_community'=>'required',
            'info_beneficiary'=>'required',
            'info_cname'=>'required',
            'info_cphone'=>'required|numeric|digits:11',
            'info_gender'=>'required',
            'info_category'=>'required',
            'info_cmode'=>'required',
            'info_cemail'=>'required',
            'info_resolved'=>'required',
            'info_subcat'=>'required',
            'info_rescomment'=>'required',
            'info_desc'=>'required',
            'info_age'=>'required|integer|min:18|max:65'
        ]);

        //getting the tracking number
        $desired_length = 10;
        $unique = uniqid();

        $str = substr($unique, 0, $desired_length);

        //validating escalate
        $comm1 = $request->info_escalate;
        $comm2 = "";
        if($comm1 == "")
        {
            $comm2 = "N/A";
        }


        else{
            $comm2 = $comm1;
        }

        //validating referal
        $reff1 = $request->info_referal;
        $reff2 = "";
        if($reff1 == "")
        {
            $reff2 = "N/A";
        }


        else{
            $reff2 = $reff1;
        }

        //validating NSR
        $nsr1 = $request->info_nsr;
        $nsr2 = "";
        if($nsr1 == "")
        {
            $nsr2 = "N/A";
        }


        else{
            $nsr2 = $nsr1;
        }

        $date = date("Y/m/d");

        $month = date('F', strtotime($date));


        //inserting the data
        $grieviance = new grieviance;
        $grieviance->zone = $request->info_zone;
        $grieviance->state = $request->info_state;
        $grieviance->lga = $request->info_lga;
        $grieviance->ward = $request->info_ward;
        $grieviance->community = $comm2;
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
        $grieviance->referal = "N/A";
        $grieviance->escalate = "N/A";
        $grieviance->nsr_no = $nsr2;
        $grieviance->month = $month;
        $grieviance->assigned= $comm2;
        $grieviance->attended= 0;
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
            'nsr'=> $nsr2
        ];

        Mail::to($request->info_cemail, "sgodwin@nassp.gov.ng")->send(new grieve($details));

       if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
           return back()->with('fail', 'something went wrong try again');
        }
    }


    function chart_date(Request $request)
    {
        $name12= $_COOKIE['name'];
        //Session::put('chart_date', $name12);

        //$resolved_month = Session::get('chart_date');

        //echo $name12;

        $title = grieviance::value('created_at');

        $firstname = strtok($title, ' ');

        $time=strtotime($firstname);
        $month=date("F",$time);

        //echo $month ;

        $resolved_chart = grieviance::where('resolved', '=', 'yes')->where('month', '=', $name12)->count();

        $review_chart = grieviance::where('resolved', '=', 'no')->where('month', '=', $name12)->count();

        $new_chart = grieviance::where('attended', '=', 0)->where('month', '=', $name12)->count();

        session::put('sum_charta', $resolved_chart);

        session::put('sum_chartb', $review_chart);

        session::put('sum_chartc', $new_chart);

        echo $resolved_chart;

        //echo $review_chart;

        //echo $new_chart;

        $chart_total = $resolved_chart + $review_chart + $new_chart;

        if($chart_total == 0){
            $chart_total = 1;
        }
        else{
            $chart_total = $chart_total;
        }

        $chart_a1 = ($resolved_chart/$chart_total) * 100;

        $chart_b1 = ($review_chart/$chart_total) * 100;

        $chart_c1 = ($new_chart/$chart_total) * 100;
        $chart_a = number_format((float)$chart_a1, 2, '.', '');

        $chart_b = number_format((float)$chart_b1, 2, '.', '');

        $chart_c = number_format((float)$chart_c1, 2, '.', '');

        echo $chart_c;
        session::put('chart_a', $chart_a);

        session::put('chart_b', $chart_b);

        Session::put('chart_c', $chart_c);

        //return view('national.home');
        //return redirect()->back();
    }

    function bar_change()
    {
        session::put('chart_bar', 2);
        return back();

    }

    function filter_grieviance(Request $request)
    {
        $zone = $request->filter_zone_select;

        $state = $request->filter_state_select;

        $lga = $request->filter_lga_select;

        $ward = $request->filter_ward_select;

        $category = $request->filter_category_select;

        //echo $category;

        $mode = $request->filter_mode_select;

        $resolved = $request->filter_resolved_select;

        //echo $state;

        //validating zone
        $zone1 = "";
        if($zone == "")
        {
            $zone = null;
            $zone1 = null;
        }


        else{
            //$zone = null;
            $zone1 = "zone";
        }

        //validating state
        $state1 = "";
        if($state == "")
        {
            $state = null;
            $state1 = null;
        }


        else{
            $state1 = "state";
        }

        //validating lga
        $lga1 = "";
        if($lga == "")
        {
            $lga = null;
            $lga1 = null;
        }


        else{
            $lga1 = "lga";
        }

        //validating ward
        $ward1 = "";
        if($ward == "")
        {
            $ward = null;
            $ward1 = null;
        }


        else{
            $ward1 = "ward";
        }

        //validating category
        $category1 = "";
        if($category == "")
        {
            $category = null;
            $category1 = null;
        }


        else{
            $category1 = "category";
        }

        //validating mode
        $mode1 = "";
        if($mode == "")
        {
            $mode = null;
            $mode1 = null;
        }


        else{
            $mode1 = "cmode";
        }

        //validating resolved
        $resolved1 = "";
        if($resolved == "")
        {
            $resolved = null;
            $resolved1 = null;
        }


        else{
            $resolved1 = "resolved";
        }

        $filter_search = grieviance::where($resolved1, '=', $resolved)
        ->where($zone1, '=', $zone)
        ->where($state1, '=', $state)
        ->where($lga1, '=', $lga)
        ->where($ward1, '=', $ward)
        ->where($category1, '=', $category)
        ->where($mode1, '=', $mode)
        ->get();

        //echo $filter_search;

        session::put('filter_search', $filter_search);

        $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
        ->where($resolved1, '=', $resolved)
        ->where($zone1, '=', $zone)
        ->where($state1, '=', $state)
        ->where($lga1, '=', $lga)
        ->where($ward1, '=', $ward)
        ->where($category1, '=', $category)
        ->where($mode1, '=', $mode)
        ->get();

        session::put('download_list', $download_list );

        return back();

    }

    function all_grieviances()
    {
        //echo "sdsdsd";
        $grieviance_main = grieviance::get();
        //echo $cat1;
        session::put('filter_search', $grieviance_main );

        $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
        ->get();

        session::put('download_list', $download_list );
        return back();

    }

    function personal()
    {
        $id = session::get('loggeduser');
        $title = user::where('user_id', '=', $id)->value('title');
        //echo $title;
        $grieviance_main = grieviance::
        where('assigned', '=', $id)
        ->orWhere('assigned', '=', $title)
        ->where('resolved', '=', 'no')
        ->get();
        //echo $grieviance_main;
        session::put('filter_search', $grieviance_main );
        $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
        ->where('assigned', '=', $id)
        ->orWhere('assigned', '=', $title)
        ->where('resolved', '=', 'no')
        ->get();

        session::put('download_list', $download_list );
        return back();

    }

    function search_bar(Request $request)
    {
        $search_input= $_COOKIE['search_input'];
        echo $search_input;
        $search_input= grieviance::
            where('track', 'LIKE', '%'.$search_input.'%')
            ->get();

        //echo $search_input;
        $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
        ->where('track', 'LIKE', '%'.$search_input.'%')
        ->get();

        session::put('download_list', $download_list );

        session::put('filter_search', $search_input );
        //return back();
    }

    function edit(Request $request)
    {
        $edit_id = $request->id;

        session::put('edit_id', $edit_id);

        //session::put('edit_show_id', "show");

        return back();

    }

    function edit_form(Request $request)
    {
        session::put('edit_show_id', 'none');
        return back();
    }

    function chart_states()
    {
       $chart_states= $_COOKIE['chart_states'];

       if($chart_states == "wards")
       {
        session::put('home_chart_states', 1);
       }
       else if($chart_states == "states")
       {
        session::put('home_chart_states', 2);
       }

       return back();
    }

    function cat_state(){
        $cat_state = $_COOKIE['cat_state'];
        session::put('cat_state', $cat_state);
        //return back();
    }

    function category_list(){
        $state = session::get('cat_state');

        $category_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
        ->where('state', $state)
        ->get();

        session::put('category_list', $category_list );

        return Excel::download(new categoryExport, 'Grieviance Category.xlsx');
    }

    function gro_add(Request $request){
        $request->validate([
            'fname'=>'required',
            'mname'=>'',
            'lname'=>'required',
            'email'=>'required|email',
            'state'=>'required',
            'lga'=>'',
            'designation'=>'required',
            'password'=>'required|min:8|max:12',
            'phone'=>'max:12'
        ]);

        //getting unique id
        $desired_length = 10;
        $unique = uniqid();

        $str = substr($unique, 0, $desired_length);

        $full_name = $request->fname ." ". $request->mname ." ". $request->lname;

        echo $full_name;

        echo $str;

        //checking lga
        $lga1 = $request->lga;
        $lga2 = "";
        if($lga1 == "")
        {
            $lga2 = "N/A";
        }


        else{
            $lga2 = $lga1;
        }

        //checking mname
        $mname1 = $request->mname;
        $mname2 = "";
        if($mname1 == "")
        {
            $mname2 = "N/A";
        }


        else{
            $mname2 = $mname1;
        }

        if($request->password == $request->cpassword)
        {
            $user1 = User::where('user_id', '=', $str)->first();
            if ($user1 === null) {
                $email1 = User::where('email', '=', $request->email)->first();
                if ($email1 === null) {
                    //echo "user doesn't exist";
                    $user = new User;
                    $user->user_id = $str;
                    $user->fname = $request->fname;
                    $user->mname = $mname2;
                    $user->lname = $request->lname;
                    $user->email = $request->email;
                    $user->state = $request->state;
                    $user->lga = $lga2;
                    $user->name1 = $full_name;
                    $user->title = $request->designation;
                    $user->password = Hash::make($request->password);

                    $save = $user->save();

                    if($save){
                        session::put('Gro_add_save', "Your details have been saved");
                        return back();
                    }
                    else{
                        session::put('Gro_add_save', "Your details could not be saved");
                         return back();
                    }
                }
                else
                {
                    //echo "user already exist";
                    session::put('Gro_add_save', "This user already exists");
                    return back();
                }

                //echo "user doesn't exist";
            }
            else{
                //echo "user already exist";
                session::put('Gro_add_save', "User ID is the same");
                return back();
            }

        }


        //return back();
    }

    function gro_open_Add(){
        Session::forget('gro_add_form');
        session::put('gro_add_form', "visible");

        echo session::get('gro_add_form');

        //return back();

        return redirect()->back();
    }

    function gro_open_close(){
        Session::forget('gro_add_form');
        session::put('gro_add_form', "hidden");

        echo session::get('gro_add_form');

        //return back();
        return redirect()->back();
    }

    function gro_filter(Request $request)
    {
        $designation = $request->designation1;

        $state = $request->state1;

        $lga = $request->lga1;

        //validating designation
        $designation1 = "";
        if($designation == "")
        {
            $designation = null;
            $designation1 = null;
        }


        else{
            $designation1 = 'title';
        }

        $state1 = "";
        if($state == "")
        {
            $state = null;
            $state1 = null;
        }


        else{
            $state1 = 'state';
        }

        $lga1 = "";
        if($lga == "")
        {
            $lga = null;
            $lga1 = null;
        }


        else{
            $lga1 = 'lga';
        }

        echo $designation;
        //echo $state;
        //echo $lga;

        echo "sheddy";

        $filter_gro = User::where($designation1, '=', $designation)
        ->where($state1, '=', $state)
        ->where($lga1, '=', $lga)
        ->get();

        echo $filter_gro;


    }

    function gro_search(Request $request)
    {
        $search_input= $_COOKIE['search_input'];
        //$search_input= "ham";
        $search_input1= User::
            where('name1', 'LIKE', '%'.$search_input.'%')
            ->get();

        session::put('gro_table', $search_input1 );
        return back();
    }

    function all_gro()
    {
        $gro_all = User::get();
        //echo $cat1;
        session::put('gro_table', $gro_all );
        return back();
    }

    function main_not_show()
    {
        session::put('main_not_close', 'none');
        return back();
    }

    function test()
    {
        $gro_table = user::where('general_key', 1)->get()->where('id', 1);

        echo $gro_table;
    }

    function gro_add_show()
    {
        session::put('gro_add_form', "visible");
        return back();
    }
}
