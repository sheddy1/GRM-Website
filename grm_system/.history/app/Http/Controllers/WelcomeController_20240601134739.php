<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use App\Models\lga;

use App\Models\grieviance;

use App\Mail\grieve;

use App\Mail\check_grieviance;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Mail;

use DB;

use Twilio\Rest\Client;

use App\Clients;




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
                if($email->title == "National GRM")
                {

                    // home chart session
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

                    // reports chart code

                    //grieviance table

                    $grieviance_main = DB::table('grieviances')->get();

                    session::put('filter_search', $grieviance_main );

                    //gro table

                    //$gro_table = user::where('general_key', 1)->get();

                    $gro_table = User::get();

                    session::put('gro_table', $gro_table );

                    $download_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
                    ->get();

                    session::put('cat_state', "fct");

                    $cat_state = session::get('cat_state');

                    $category_list = grieviance::select('track','nsr_no','state','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment','assigned','referal','created_at')
                    ->where('state', $cat_state)
                    ->get();

                    session::put('category_list', $category_list );

                    session::put('edit_show_id', "none");

                    session::put('home_chart_states', 1);

                    session::put('download_list', $download_list);

                    session::put('cat_state', "fct");

                    session::put('gro_add_form', "hidden");

                    session::put('main_not_close', "show");

                    // report page code for charts


                    $report_date = date("Y/m/d");

                    $report_month_session = date('F', strtotime($report_date));

                    $report_year_session = date('Y', strtotime($report_date));

                    // report date session
                    $report_year = session::put('report_summary_resolved', $report_year_session);

                    // report month session
                    $report_month = session::put('report_summary_resolved', $report_month_session);

                    //getting count for resolved variable
                    $report_summary_resolved = grieviance::whereYear('created_at', '=', $report_year)
                    ->whereMonth('created_at', '=', $report_month)
                    ->where('resolved', '=', 'yes')
                    ->get()->count();

                    //getting count for review variable
                    $report_summary_review = grieviance::whereYear('created_at', '=', $report_year)
                    ->whereMonth('created_at', '=', $report_month)
                    ->where('resolved', '=', 'no')
                    ->get()->count();

                    //getting count for new variable
                    $report_summary_new = grieviance::whereYear('created_at', '=', $report_year)
                    ->whereMonth('created_at', '=', $report_month)
                    ->where('attended', '=', 0)
                    ->get()->count();

                    $report_percentage = $report_summary_new + $report_summary_review + $report_summary_resolved;

                    if($report_percentage == 0){
                        $report_percentage = 1;
                    }
                    else{
                        $report_percentage = $report_percentage;
                    }

                    //getting the percentage
                    $report_percentage_resolved_a = ($report_summary_resolved/$report_percentage) * 100;

                    $report_percentage_new_a = ($report_summary_new/$report_percentage) * 100;

                    $report_percentage_review_a = ($report_summary_review/$report_percentage) * 100;

                    // seperating percentage into 2decimal places

                    $report_percentage_resolved = number_format((float)$report_percentage_resolved_a, 2, '.', '');

                    $report_percentage_new = number_format((float)$report_percentage_new_a, 2, '.', '');

                    $report_percentage_review = number_format((float)$report_percentage_review_a, 2, '.', '');

                    // putting values into various sessions

                    session::put('report_percentage_resolved', $report_percentage_resolved);

                    session::put('report_percentage_new', $report_percentage_new);

                    session::put('report_percentage_review', $report_percentage_review);

                    echo $report_percentage;

                    // end of report code for summary chart

                    //Cookie::make('main_not_close', 'show');



                    //end of chart1 code
                    $request->session()->put('loggeduser', $email->user_id);
                    return redirect('national_homepage');
                }
                else if($email->title == "State GRM")
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

        //echo $request->phone;

        $trimmed_phone = ltrim($request->phone, "0");

        //echo $trimmed_phone;

        $recieve_no = "+" . 234 . $trimmed_phone;

        echo $recieve_no;

        $message =
        "
        We have recieved your grieviance and we would like to
        appologize, for any inconvinience this has cause you,
        please hold on while we sought out your grieviance.
        a tracking number for this grieviance has been included
        in this mail, which you can use to track this grieviance
        whenever you wish to thank you.
        Your Tracking number is: ".$str.",
        Zone : ".$request->zone.",
        State : ".$request->state.",
        LGA : ".$request->lga.",
        Ward : ".$request->ward.",
        Community :".$request->community.",
        Are you a beneficiary : ".$request->beneficiary.",
        NSR Number: ".$comm2."
        Name : ".$request->name.",
        Gender : ".$request->gender.",
        Age : ".$request->age.",
        Phone : ".$request->phone.",
        Email : ".$email2.",
        Grieviance Description : ".$request->description.",
        Grieviance Category : N/A
        Grieviance Sub Category : N/A
        Grieviance Complaint Mode : ONLINE
        Has this grieviance been resolved : N/A
        Comment on the Resolved grieviance : N/A
        PLease feel free to register your grieviances with nassco at any time

        ";

        //echo $message;

            $sid    = getenv("TWILIO_SID");;
            $token  = getenv("TWILIO_TOKEN");;
            $phone  = getenv("TWILIO_PHONE");
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
            ->create($recieve_no, // to
            array(
            "from" => $phone,
            "body" => $message
            )
            );
            //print($message->sid);

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

        //send m=phone message


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

        return view('mail.RegisterSuccesful');
    }

    function check_grieve (Request $request)
    {
        $code = grieviance::
         where('track', '=', $request->info_share)
        ->first();
        if($code == null){
            //echo "No such code found";
            return back()->with('fail', 'This code does not exist in the grieviance database');
        }
        else
        {
            //echo "it is available";

            //send sms code
            //echo $request->info_share;

            //getting reciever phone number
            $recieve_no1 = grieviance::
            where('track', '=', $request->info_share)
            ->value('phone');

            //getting name
            $name = grieviance::
            where('track', '=', $request->info_share)
            ->value('name');

            //getting state
            $state = grieviance::
            where('track', '=', $request->info_share)
            ->value('state');

            //getting lga
            $lga = grieviance::
            where('track', '=', $request->info_share)
            ->value('lga');

            //getting uniques id of grieviance handler
            $unique_id = grieviance::
            where('track', '=', $request->info_share)
            ->value('assigned');

            //getting email of grm officer
            $email_officer = User::
            where('user_id', '=', $unique_id)
            ->value('email');

            //getting phone number of grm officer
            $phone_officer1 = User::
            where('user_id', '=', $unique_id)
            ->value('phone');

            $phone_officer = 0 . $recieve_no1;

            //echo  $phone_officer;

            $recieve_no = "+" . 234 . $recieve_no1;

            $message = "Hello ".$name."<br> Your Grieviance (".$request->info_share.") has been acknowledged and
            is currently being handled by The Lga GRM Officer of
            ".$state. " state " .$lga." local goverment. We offer our sincere
            apologies for any inconvenience this may have caused you. Kindly contact 07098283942 or
            send an email to adaniel@nassp.gov.ng if you have any questions thank you.
            ";

            $message1 = "Hello " . $name;

            $message2 = "Your Grieviance (".$request->info_share.") has been acknowledged and
            is currently being handled by The Lga GRM Officer of
            ".$state. " state " .$lga." local goverment. We offer our sincere
            apologies for any inconvenience this may have caused you. Kindly contact 07098283942 or
            send an email to adaniel@nassp.gov.ng if you have any questions thank you.
            ";

            //echo $message;

            //sendinf the message
            $sid    = getenv("TWILIO_SID");;
            $token  = getenv("TWILIO_TOKEN");;
            $phone  = getenv("TWILIO_PHONE");
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
            ->create($recieve_no, // to
            array(
            "from" => $phone,
            "body" => $message
            )
            );
            //print($message->sid);

            //sending email code

            $details = [
            'title' => 'Check Grieviance',
            'body' => $message1,
            'body1' => $message2
            ];

            Mail::to("shadrachgodwin@gmail.com")->send(new check_grieviance($details));

            //return view('mail.check_grieve');
            return back()->with('success', 'Details have been sent to the registered email and phone number');
            //<script>alert("you have been registered")</script>
        }

    }

}
