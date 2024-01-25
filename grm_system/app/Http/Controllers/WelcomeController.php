<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use App\Models\grieviance;

use App\Mail\grieve;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

use DB;


class WelcomeController extends Controller
{
    function home(){
        session::put('nsr_drop','nsr_drop');
        session::put('footer', 'footer');
        session::put('copyright', 'copyright');
        //return view('main.welcome');
        $total_grieviance = DB::table('grieviances')->count();
        $resolved = grieviance::where('resolved', '=', 'yes')->count();
        $review = grieviance::where('resolved', '=', 'no')->count();
        return view('main.welcome', [
        'total_grieviance' => $total_grieviance, 
        'resolved' => $resolved,
        'review' => $review
        ]);
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
                    session::put('chart_bar', 0);
                    //chart1 code

                    $date_chart1 = date("Y/m/d");

                    //$month_chart1 = date('F', strtotime($date_chart1));

                    $month_chart1 = "may";

                    //session::put('month', $month_chart1);

                    $resolved_chart = grieviance::where('resolved', '=', 'yes')->where('month', '=', $month_chart1)->count();

                    $review_chart = grieviance::where('resolved', '=', 'no')->where('month', '=', $month_chart1)->count();

                    $new_chart = grieviance::where('attended', '=', 0)->where('month', '=', $month_chart1)->count();

                    session::put('sum_charta', $resolved_chart);

                    session::put('sum_chartb', $review_chart);

                    session::put('sum_chartc', $new_chart);

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

                    session::put('chart_a', $chart_a);

                    session::put('chart_b', $chart_b);

                    Session::put('chart_c', $chart_c);

                    $grieviance_main = DB::table('grieviances')->get();

                    session::put('filter_search', $grieviance_main );

                    $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
                    ->get();

                    session::put('cat_state', "fct");

                    $cat_state = session::get('cat_state');

                    $category_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
                    ->where('state', $cat_state)
                    ->get();

                    session::put('category_list', $category_list );

                    session::put('edit_show_id', "none");

                    session::put('home_chart_states', 2);

                    session::put('download_list', $download_list );

                    session::put('cat_state', "fct");

                    //end of chart1 code
                    $request->session()->put('loggeduser', $email->user_id);
                    return redirect('national_homepage');
                }
                else if($email->position ==2)
                {
                    $request->session()->put('loggeduser', $email->user_id);
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
            'community'=>'required',
            'beneficiary'=>'required',
            'name'=>'required|string',
            'gender'=>'required',
            'age'=>'required|integer|min:18|max:65',
            'phone'=>'required|numeric|digits:11',
            'email'=>'',
            'description'=>'required',
            'nsr_no'=>''
        ]);

        //getting the tracking number
        $desired_length = 10;
        $unique = uniqid();

        $str = substr($unique, 0, $desired_length);

        //adjusting community code
        $comm1 = $request->nsr_no;
        $comm2 = "";
        if($comm1 == "")
        {
            $comm2 = "N/A";
        }

        
        else{
            $comm2 = $comm1;
        }

        //adjusting nsr code
        
        $date = date("Y/m/d");

        $month = date('F', strtotime($date));

        //email
        $email1 = $request->email;
        $email2 = "";
        if($email1 == ""){
            $email2 = "N/A";
        }
        else
        {$email2=$email1;}

        //inserting the data
        $grieviance = new grieviance;
        $grieviance->zone = $request->zone;
        $grieviance->state = $request->state_select;
        $grieviance->lga = $request->lga_select;
        $grieviance->ward = $request->ward;
        $grieviance->community = $request->community;
        $grieviance->beneficiary = $request->beneficiary;
        $grieviance->nsr_no = $comm2;
        $grieviance->name = $request->name;
        $grieviance->gender = $request->gender;
        $grieviance->age = $request->age;
        $grieviance->phone = $request->phone;
        $grieviance->email = $email2;
        $grieviance->desc = $request->description;
        $grieviance->category = "N/A";
        $grieviance->sub_category = "N/A";
        $grieviance->cmode = "online";
        $grieviance->resolved = "no";
        $grieviance->rescomment = "N/A";
        $grieviance->track = $str;
        $grieviance->month = $month;
        $grieviance->assigned = "N/A";
        $grieviance->attended = 0;
        $grieviance->referal = "N/A";
        $grieviance->escalate = "N/A";
        $save = $grieviance->save();

        //sending the tracking number through an email
        $details = [
            'title' => 'Recieved Grieviance',
            'body' => '
                We have recieved your grieviance and we would like to appologize, for any
                inconvinience this has cause you, please hold on while we sought out your
                grieviance. a tracking number for this grieviance has been included in this mail,
                which you can use to track this grieviance whenever you wish to thank you
            ',
            'track'=> $str,
            'zone'=> $request->zone,
            'state'=> $request->state_select,
            'lga'=> $request->lga_select,
            'ward'=> $request->ward,
            'community'=> $request->community,
            'ben'=> $request->beneficiary,
            'nsr'=> $request->nsr_no,
            'name'=> $request->name,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'desc'=> $request->description,
            'category'=> "N/A",
            'subcat'=> "N/A",
            'cmode'=> "ONLINE",
            'resolved'=> "N/A",
            'rescomment'=> "N/A",
            'escalate' => "N/A",
            'referal'=> "N/A"
        ];

        if($email1!=""){
            Mail::to($request->email)->send(new grieve($details));
            //Mail::to("sgodwin@nassp.gov.ng")->send(new grieve($details));
        }
        else{
            echo "stuff";
        }
        

        Session::put('reg',1);

        if($save){
            return back()->with('success', 'Your Grieviance has been registered');
        }
        else{
            return back()->with('fail', 'something went wrong try again');
        }

    }

    public function register_successful(){
        Session::put('reg',2);

        return back();
    }

    public function mail(){

        $desired_length = 10;
        $unique = uniqid();

        $str = substr($unique, 0, $desired_length);

        $details = [
            'title' => 'mail from shadraqch',
            'body' => 'God is amazing',
            'track'=> $str
        ];

        Mail::to("shadrachgodwin@gmail.com")->send(new grieve($details));

        return view('main.RegisterSuccesful');
    }

    

}
