@php
    use Illuminate\Support\Facades\Session;
    use App\Models\grieviance;
    use App\Models\lga;
@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>National Homepage</title>
        <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
        <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ URL('css/national/home.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    
        {{--  <script>alert({{ session::get('chart_a') }})</script>  --}}
        <input type="checkbox" id="check_nav" style="display: none" checked>
        
        <nav>

            <label class="dashboard_nassp" for="check_nav">
                <img src="{{ URL('img/nassco_logo.png') }}" alt="Dashboard Icon" class="dashboard_nassp_icon">
                <span class="dashboard_nassp_desc" id="dashboard_nassp_desc">NASSP GRIEVIANCE CENTER</span>
            </label>
            <ul class="ul_whole">
                <li>
                    <a href="{{ route('national_homepage') }}">
                        <img src="{{ URL('img/dashboard_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                        <span class="nav_item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a  class="grieve_open" >
                        <img src="{{ URL('img/grieve_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                        <span class="nav_item">Grieviances</span>
                        {{--  <input type="checkbox" class="dashboard_grieve_checkbox" id="dashboard_grieve_checkbox">  --}}
                    </a>
                    <ul class="ul_whole1">
                        <li><a href="{{ route('national_reg') }}">Register</a></li>
                        <li><a href="{{ route('national_list') }}">Grieviance List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('national_gro') }}">
                        <img src="{{ URL('img/gro_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                        <span class="nav_item">GRO Reports</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('national_gro') }}">
                        <img src="{{ URL('img/lgagro_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                        <span class="nav_item">LGA GROs</span>
                    </a>
                </li>
            </ul>

            <span class="nav_logout">
                <label class="nav_logout_lab">
                    <img src="{{ URL('img/logout_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">Logout</span>
                </label>
            </span>
        </nav>

        <div class="main" id="main">
            <form method="GET"  class="main_notification" action="{{ route("main_not_show") }}"
            style="display: {{ session::get('main_not_close') }}">
                @csrf
                <span class="main_notification_cover"></span>
                <span class="main_notification_box">
                    <button type="submit" class="main_notification_box_btn1">
                        <img src="{{ URL('img/close.png') }}" alt="close" class="main_notification_box_close" id="main_notification_box_close">
                    </button>
                    
                    <label class="main_notification_box_lab1">You Have</label>
                    <label class="main_notification_box_lab2">49</label>
                    <label class="main_notification_box_lab3">New Grieviances</label>

                    <span class="main_notification_box_btn" onclick="location.href = '{{ route('national_list') }}'">View Grieviances</span>
                </span>
            </form>

            <div class="main_header">
                <span class="main_header_name">
                    <label class="main_header_name_name">Welcome {{ $name }} {{ $lname }} </label>
                    <label class="main_header_name_desc">Here is an update on GRM today</label>
                </span>

                <span class="main_header_desc">
                    <span class="main_header_desc1">
                        {{--  <img src="{{ URL('img/dropdown.png') }}" alt="dropdown image" class="main_header_desc1_icon">  --}}
                        <label class="main_header_desc1_name">{{ $name }} {{ $lname_first }}.</label>
                        <label class="main_header_desc1_desc">{{ $title }}</label>
                    </span>

                    <img src="{{ URL('img/male.png') }}" alt="MAle Icon" class="main_header_desc1_desc_male_icon" id="main_header_desc1_desc_male_icon">

                    <img src="{{ URL('img/bell.png') }}" alt="notification Icon" class="main_header_desc1_desc_not_icon" id="main_header_desc1_desc_not_icon">

                    <img src="{{ URL('img/search1.png') }}" alt="search Icon" class="main_header_desc1_desc_search_icon" id="main_header_desc1_desc_search_icon"  style="display:none">

                    <span style="display: none" class="main_header_desc1_desc_search_icon_drop" id="main_header_desc1_desc_search_icon_drop">
                        <table class="main_header_desc1_desc_search_icon_drop_table">
                            <tr>
                                <th > 
                                    You have 4 new grieviances assigned to you, that has not been resolved
                                </th>
                                
                            </tr>
                        </table>
                    </span>
                </span>
            </div>

            <div class="main_summary">
                <span class="main_summary_recorded">
                    <label class="main_summary_recorded_header">
                        Total Grieviances Recorded
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $total_grieviance }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Total Grieviances
                    </label>

                    <img src="{{ URL('img/record.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_resolved">
                    <label class="main_summary_recorded_header">
                        Total Grieviances Resolved
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $resolved }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Resolved Cases
                    </label>

                    <img src="{{ URL('img/resolved.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_review">
                    <label class="main_summary_recorded_header">
                        Pending Grieviances
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $review }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Review Grieviances
                    </label>

                    <img src="{{ URL('img/review.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_new">
                    <label class="main_summary_recorded_header">
                        New Grieviances
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $new }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        New Cases
                    </label>

                    <img src="{{ URL('img/new.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>
            </div>

            <div class="main_chart1" id="main_chart1">
                <span class="main_chart1_oval">
                    <span class="main_chart1_oval_header">
                        <label class="main_chart1_oval_header_desc">Grieviance Summary</label>

                        <select name="main_chart1_oval_header_drop" class="main_chart1_oval_header_drop" id="main_chart1_oval_header_drop">
                        <option selected disabled>{{$month}}</option>
                        <option value="january">January</option>
                        <option value="febuary">Febuary</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>
                    </span>

                    <span class="main_chart1_oval_desc">
                        <span class="main_chart1_oval_desc1">
                                <label class="main_chart1_oval_desc1_lab">
                                    <img src="{{ URL('img/circle1.png') }}" alt="" class="circle1">
                                    Resolved
                                </label>
                        </span>

                        <span class="main_chart1_oval_desc2">
                            <label class="main_chart1_oval_desc1_lab">
                                <img src="{{ URL('img/circle2.png') }}" alt="" class="circle1">
                                Pending
                            </label>
                        </span>

                        <span class="main_chart1_oval_desc3">
                            <label class="main_chart1_oval_desc1_lab">
                                <img src="{{ URL('img/circle3.png') }}" alt="" class="circle1">
                                New cases
                            </label>
                        </span>
                    </span>

                    <span class="main_chart1_oval_chart" >
                        <span id="container"> </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text4" >
                            Summary <br> of <br> Grieviances 
                        </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text1" style="display:none">
                            Resolved <br>  Grieviances <br> {{ session::get('sum_charta')}}
                        </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text2" style="display:none">
                            Reviewed <br> Grieviances <br> {{ session::get('sum_chartb')}}
                        </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text3" style="display:none">
                            New <br> Grieviances <br> {{ session::get('sum_chartc')}}
                        </span>
                    </span>

                    {{--  <div id="container" class="main_chart1_oval_chart" ></div>  --}}


                </span>

                <span class="main_chart1_bar" id="main_chart1_bar">
                    <span class="main_chart1_bar_header">

                    <select name="main_chart1_bar_header_lab" id="main_chart1_bar_header_lab" class="main_chart1_bar_header_lab">
                        <option value="wards">All Wards</option>
                        <option value="states">All States</option>
                    </select>
                    
                        <!-- <label class="main_chart1_bar_header_lab">All Wards</label> -->

                        @php
                            $bar_change5 = $_COOKIE['bar_change'];
                        @endphp



                        <select class="main_chart1_bar_header_lab_drop"
                         id="main_chart1_bar_header_lab_drop" name="main_chart1_bar_header_lab_drop">
                            <option selected disabled>{{ $bar_change5 }}</option>
                            <option value="fct" {{ old('main_chart1_bar_header_lab_drop') == "fct" ? 'selected' : '' }}>ABUJA</option>
                            <option value="abia" {{ old('main_chart1_bar_header_lab_drop') == "abia" ? 'selected' : '' }}>ABIA</option>
                            <option value="adamawa" {{ old('main_chart1_bar_header_lab_drop') == "adamawa" ? 'selected' : '' }}>ADAMAWA</option>
                            <option value="akwa-ibom" {{ old('main_chart1_bar_header_lab_drop') == "akwa-ibom" ? 'selected' : '' }}>AKWA IBOM</option>
                            <option value="anambra" {{ old('main_chart1_bar_header_lab_drop') == "anambra" ? 'selected' : '' }}>ANAMBRA</option>
                            <option value="bauchi" {{ old('main_chart1_bar_header_lab_drop') == "bauchi" ? 'selected' : '' }}>BAUCHI</option>
                            <option value="bayelsa" {{ old('main_chart1_bar_header_lab_drop') == "bayelsa" ? 'selected' : '' }}>BAYELSA</option>
                            <option value="benue" {{ old('main_chart1_bar_header_lab_drop') == "benue" ? 'selected' : '' }}>BENUE</option>
                            <option value="borno" {{ old('main_chart1_bar_header_lab_drop') == "borno" ? 'selected' : '' }}>BORNO</option>
                            <option value="cross-river" {{ old('main_chart1_bar_header_lab_drop') == "cross-river" ? 'selected' : '' }}>CROSS RIVER</option>
                            <option value="delta" {{ old('main_chart1_bar_header_lab_drop') == "delta" ? 'selected' : '' }}>DELTA</option>
                            <option value="ebonyi" {{ old('main_chart1_bar_header_lab_drop') == "ebonyi" ? 'selected' : '' }}>EBONYI</option>
                            <option value="edo" {{ old('main_chart1_bar_header_lab_drop') == "edo" ? 'selected' : '' }}>EDO</option>
                            <option value="ekiti" {{ old('main_chart1_bar_header_lab_drop') == "ekiti" ? 'selected' : '' }}>EKITI </option>
                            <option value="enugu" {{ old('main_chart1_bar_header_lab_drop') == "enugu" ? 'selected' : '' }}>ENUGU </option>
                            <option value="gombe" {{ old('main_chart1_bar_header_lab_drop') == "gombe" ? 'selected' : '' }}>GOMBE </option>
                            <option value="imo" {{ old('main_chart1_bar_header_lab_drop') == "imo" ? 'selected' : '' }}>IMO </option>
                            <option value="jigawa" {{ old('main_chart1_bar_header_lab_drop') == "jigawa" ? 'selected' : '' }}>JIGAWA </option>
                            <option value="kaduna" {{ old('main_chart1_bar_header_lab_drop') == "kaduna" ? 'selected' : '' }}>KADUNA </option>
                            <option value="kano" {{ old('main_chart1_bar_header_lab_drop') == "kano" ? 'selected' : '' }}>KANO </option>
                            <option value="katsina" {{ old('main_chart1_bar_header_lab_drop') == "katsina" ? 'selected' : '' }}>KATSINA </option>
                            <option value="kebbi" {{ old('main_chart1_bar_header_lab_drop') == "kebbi" ? 'selected' : '' }}>KEBBI </option>
                            <option value="kogi" {{ old('main_chart1_bar_header_lab_drop') == "kogi" ? 'selected' : '' }}>KOGI </option>
                            <option value="kwara" {{ old('main_chart1_bar_header_lab_drop') == "kwara" ? 'selected' : '' }}>KWARA </option>
                            <option value="lagos" {{ old('main_chart1_bar_header_lab_drop') == "lagos" ? 'selected' : '' }}>LAGOS </option>
                            <option value="nasarawa" {{ old('main_chart1_bar_header_lab_drop') == "nassarawa" ? 'selected' : '' }}>NASARAWA </option>
                            <option value="niger" {{ old('main_chart1_bar_header_lab_drop') == "niger" ? 'selected' : '' }}>NIGER </option>
                            <option value="ogun" {{ old('main_chart1_bar_header_lab_drop') == "ogun" ? 'selected' : '' }}>OGUN </option>
                            <option value="ondo" {{ old('main_chart1_bar_header_lab_drop') == "ondo" ? 'selected' : '' }}>ONDO </option>
                            <option value="osun" {{ old('main_chart1_bar_header_lab_drop') == "osun" ? 'selected' : '' }}>OSUN </option>
                            <option value="oyo" {{ old('main_chart1_bar_header_lab_drop') == "oyo" ? 'selected' : '' }}>OYO </option>
                            <option value="plateau" {{ old('main_chart1_bar_header_lab_drop') == "plateau" ? 'selected' : '' }}>PLATEAU </option>
                            <option value="rivers" {{ old('main_chart1_bar_header_lab_drop') == "rivers" ? 'selected' : '' }}>RIVERS </option>
                            <option value="sokoto"{{ old('main_chart1_bar_header_lab_drop') == "sokoto" ? 'selected' : '' }}>SOKOTO </option>
                            <option value="taraba" {{ old('main_chart1_bar_header_lab_drop') == "taraba" ? 'selected' : '' }}>TARABA </option>
                            <option value="yobe" {{ old('main_chart1_bar_header_lab_drop') == "yobe" ? 'selected' : '' }}>YOBE </option>
                            <option value="zamfara" {{ old('main_chart1_bar_header_lab_drop') == "zamfara" ? 'selected' : '' }}>ZAMFARA </option>

                        </select>
                    </span>

                    <div class="main_chart1_bar_chart" id="main_chart1_bar_chart">
                        @php
                            $chstates = session::get('home_chart_states');
                        @endphp

                        @if($chstates == 1)
                            <div id="container1"> </div>

                            <table id="datatable" style="display: none">
                            <thead>
                            <tr >
                                <th>asasas</th>
                                <th>No of Grieviance</th>
                            </tr>
                            </thead>
                            <tbody id="container1_tbody">
                                @php
                                    if(session::get('chart_bar') == 0)
                                    {
                                        $bar_change2 = 'fct';
                                        $bar_change4 = lga::where('state1', '=', $bar_change2)->get();
                                    }
                                    else if(session::get('chart_bar') == 1){
                                        $bar_change2 = $_COOKIE['bar_change'];
                                        $bar_change4 = lga::where('state1', '=', $bar_change2)->get();
                                    }
                                    
                                @endphp
                                @foreach ($bar_change4 as $key => $data)
                                    <tr>
                                        
                                        <th>@php
                                           echo $data->lgan;
                                        @endphp</th>
                                        <td>@php
                                            $lga = $data->lga;
                                            $bar_num = grieviance::where('lga', '=', $lga)->count();
                                            echo $bar_num;
                                        @endphp</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        
                        @elseif ($chstates == 2)
                            <div id="container2">sadasa</div>

                            <table id="datatable2" style="display: none">
                                <thead>
                                <tr >
                                    <th>asasas</th>
                                    <th>No of Grieviance</th>
                                </tr>
                                </thead>
                                <tbody id="container1_tbody">
                                    <tr>
                                        <th>Abia</th>
                                        <td>{{ $abia }}</td>
                                    </tr>

                                    <tr>
                                        <th>Adamawa</th>
                                        <td>{{ $adamawa }}</td>
                                    </tr>

                                    <tr>
                                        <th>Akwa Ibom</th>
                                        <td>{{$akwa_ibom}}</td>
                                    </tr>

                                    <tr>
                                        <th>Anambra</th>
                                        <td>{{$anambra}}</td>
                                    </tr>

                                    <tr>
                                        <th>Bauchi</th>
                                        <td>{{$bauchi}}</td>
                                    </tr>

                                    <tr>
                                        <th>Bayelsa</th>
                                        <td>{{$bayelsa}}</td>
                                    </tr>

                                    <tr>
                                        <th>Benue</th>
                                        <td>{{$benue}}</td>
                                    </tr>

                                    <tr>
                                        <th>Borno</th>
                                        <td>{{$borno}}</td>
                                    </tr>

                                    <tr>
                                        <th>Cross River</th>
                                        <td>{{$cross_river}}</td>
                                    </tr>

                                    <tr>
                                        <th>Delta</th>
                                        <td>{{$delta}}</td>
                                    </tr>

                                    <tr>
                                        <th>Ebonyi</th>
                                        <td>{{$ebonyi}}</td>
                                    </tr>

                                    <tr>
                                        <th>Edo</th>
                                        <td>{{$edo}}</td>
                                    </tr>

                                    <tr>
                                        <th>Ekiti</th>
                                        <td>{{$ekiti}}</td>
                                    </tr>

                                    <tr>
                                        <th>Enugu</th>
                                        <td>{{$enugu}}</td>
                                    </tr>

                                    <tr>
                                        <th>Gombe</th>
                                        <td>{{$gombe}}</td>
                                    </tr>

                                    <tr>
                                        <th>Imo</th>
                                        <td>{{$imo}}</td>
                                    </tr>

                                    <tr>
                                        <th>Jigawa</th>
                                        <td>{{$jigawa}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kaduna</th>
                                        <td>{{$kaduna}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kano</th>
                                        <td>{{$kano}}</td>
                                    </tr>

                                    <tr>
                                        <th>Katsina</th>
                                        <td>{{$katsina}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kebbi</th>
                                        <td>{{$kebbi}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kogi</th>
                                        <td>{{$kogi}}</td>
                                    </tr>

                                    <tr>
                                        <th>Kwara</th>
                                        <td>{{$kwara}}</td>
                                    </tr>

                                    <tr>
                                        <th>Lagos</th>
                                        <td>{{$lagos}}</td>
                                    </tr>

                                    <tr>
                                        <th>Nassarawa</th>
                                        <td>{{$nasarawa}}</td>
                                    </tr>

                                    <tr>
                                        <th>Niger</th>
                                        <td>{{$niger}}</td>
                                    </tr>

                                    <tr>
                                        <th>Ogun</th>
                                        <td>{{$ogun}}</td>
                                    </tr>

                                    <tr>
                                        <th>Ondo</th>
                                        <td>{{$ondo}}</td>
                                    </tr>

                                    <tr>
                                        <th>Osun</th>
                                        <td>{{$osun}}</td>
                                    </tr>

                                    <tr>
                                        <th>Oyo</th>
                                        <td>{{$oyo}}</td>
                                    </tr>

                                    <tr>
                                        <th>Plateau</th>
                                        <td>{{$plateau}}</td>
                                    </tr>

                                    <tr>
                                        <th>rivers</th>
                                        <td>{{$rivers}}</td>
                                    </tr>

                                    <tr>
                                        <th>Sokoto</th>
                                        <td>{{$sokoto}}</td>
                                    </tr>

                                    <tr>
                                        <th>Taraba</th>
                                        <td>{{$taraba}}</td>
                                    </tr>

                                    <tr>
                                        <th>Yobe</th>
                                        <td>{{$yobe}}</td>
                                    </tr>

                                    <tr>
                                        <th>Zamfara</th>
                                        <td>{{$zamfara}}</td>
                                    </tr>

                                    <tr>
                                        <th>FCT</th>
                                        <td>{{$fct}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                        
                    </div>
                </span>
            </div>

            <div class="main_chart2">
                <span class="main_chart2_grieve_category">
                    <span class="main_chart2_grieve_category_header">
                        <label class="main_chart2_grieve_category_header_lab">
                            Grieviance Category
                        </label>

                        {{--  <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn">

                        <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn">  --}}
                    </span>

                    <span class="main_chart2_grieve_category_chart">
                        <span id="container3"> </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve0">
                            Category <br> of <br> Grieviances
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve1" style="display:none">
                            WRONGFUL INCLUSION <br>EXCLUSION <br> {{ $cat1 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve2" style="display:none">
                            PAYMENT SERVICE <br> DELIVERY <br> {{ $cat2 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve3" style="display:none">
                            NASSP SERVICE <br> DELIVERY ISSUES <br> {{ $cat3 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve4" style="display:none">
                            FRAUD AND CORRUPTION <br> ISSUES <br> {{ $cat4 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve5" style="display:none">
                            DATA ERRORS <br> AND UPDATES <br> {{ $cat5 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve6" style="display:none">
                            INQUIRIES AND <br> INFORMATION <br> REQUESTS <br> {{ $cat6 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve7" style="display:none">
                            OTHER {{ $cat7 }}
                        </span>

                        <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve8" style="display:none">
                            ABUSE AND <br> SOCIAL ISSUES <br> {{ $cat8 }}
                        </span>
                    </span>
                </span>

                <span class="main_chart2_grieve_state">
                    <span class="main_chart2_grieve_category_header">
                        <label class="main_chart2_grieve_category_header_lab">
                            Total Grieviances By States
                        </label>

                        {{--  <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn2">

                        <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn2">  --}}
                    </span>

                    {{--  nigeria map code  --}}
                    <span class="main_chart2_grieve_state_map">
                        <span class="main_chart2_grieve_state_map_abia" id="disp1">
                            <img src="{{ URL('img/states/abia.png') }}" alt="abia map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Abia <br> {{ $abia }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_adamawa" id="disp1">
                            <img src="{{ URL('img/states/adamawa.png') }}" alt="adamawa map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Adamawa <br> {{ $adamawa }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_akwa_ibom" id="disp1">
                            <img src="{{ URL('img/states/akwa_ibom.png') }}" alt="akwa_ibom map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Akwa Ibom <br> {{ $akwa_ibom }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_bauchi" id="disp1">
                            <img src="{{ URL('img/states/bauchi.png') }}" alt="bauchi map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Bauchi <br> {{ $bauchi }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_anambra" id="disp1">
                            <img src="{{ URL('img/states/anambra.png') }}" alt="anambra map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Anambra <br> {{ $anambra }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_bayelsa" id="disp1">
                            <img src="{{ URL('img/states/bayelsa.png') }}" alt="bayelsa map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Bayelsa <br> {{ $bayelsa }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_benue" id="disp1">
                            <img src="{{ URL('img/states/benue.png') }}" alt="benue map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Benue <br> {{ $benue }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_cross_river" id="disp1">
                            <img src="{{ URL('img/states/cross_river.png') }}" alt="cross_river map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Cross River <br> {{ $cross_river }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_delta" id="disp1">
                            <img src="{{ URL('img/states/delta.png') }}" alt="delta map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Delta <br> {{ $delta }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_ebonyi" id="disp1">
                            <img src="{{ URL('img/states/ebonyi.png') }}" alt="ebonyi map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Ebonyi <br> {{ $ebonyi }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_edo" id="disp1">
                            <img src="{{ URL('img/states/edo.png') }}" alt="edo map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Edo <br> {{ $edo }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_ekiti" id="disp1">
                            <img src="{{ URL('img/states/ekiti.png') }}" alt="ekiti map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Ekiti <br> {{ $ekiti }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_enugu" id="disp1">
                            <img src="{{ URL('img/states/enugu.png') }}" alt="enugu map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                ENugu <br> {{ $enugu }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_fct" id="disp1">
                            <img src="{{ URL('img/states/fct.png') }}" alt="fct map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                F.C.T <br> {{ $fct }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_gombe" id="disp1">
                            <img src="{{ URL('img/states/gombe.png') }}" alt="gombe map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Gombe <br> {{ $gombe }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_imo" id="disp1">
                            <img src="{{ URL('img/states/imo.png') }}" alt="imo map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Imo <br> {{ $imo}}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_jigawa" id="disp1">
                            <img src="{{ URL('img/states/jigawa.png') }}" alt="jigawa map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Jigawa <br> {{ $jigawa }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kaduna" id="disp1">
                            <img src="{{ URL('img/states/kaduna.png') }}" alt="kaduna map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kaduna <br> {{ $kaduna }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kano" id="disp1">
                            <img src="{{ URL('img/states/kano.png') }}" alt="kano map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kano <br> {{ $kano }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kastina" id="disp1">
                            <img src="{{ URL('img/states/kastina.png') }}" alt="kastina map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kastina <br> {{ $katsina }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kebbi" id="disp1">
                            <img src="{{ URL('img/states/kebbi.png') }}" alt="kebbi map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kebbi <br> {{ $kebbi }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kogi" id="disp1">
                            <img src="{{ URL('img/states/kogi.png') }}" alt="kogi map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kogi <br> {{ $kogi }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_kwara" id="disp1">
                            <img src="{{ URL('img/states/kwara.png') }}" alt="kwara map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Kwara <br> {{ $kwara }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_ogun" id="disp1">
                            <img src="{{ URL('img/states/ogun.png') }}" alt="ogun map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Ogun <br> {{ $ogun }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_niger" id="disp1">
                            <img src="{{ URL('img/states/niger.png') }}" alt="niger map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Niger <br> {{ $niger }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_nassarawa" id="disp1">
                            <img src="{{ URL('img/states/nassarawa.png') }}" alt="nassarawa map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Nassarawa <br> {{ $nasarawa }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_lagos" id="disp1">
                            <img src="{{ URL('img/states/lagos.png') }}" alt="lagos map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Lagos <br> {{ $lagos }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_ondo" id="disp1">
                            <img src="{{ URL('img/states/ondo.png') }}" alt="ondo map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Ondo <br> {{ $ondo }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_osun" id="disp1">
                            <img src="{{ URL('img/states/osun.png') }}" alt="osun map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Osun <br> {{ $osun }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_oyo" id="disp1">
                            <img src="{{ URL('img/states/oyo.png') }}" alt="oyo map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Oyo <br> {{ $oyo }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_plateau" id="disp1">
                            <img src="{{ URL('img/states/plateau.png') }}" alt="plateau map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Plateau <br> {{ $plateau }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_rivers" id="disp1">
                            <img src="{{ URL('img/states/rivers.png') }}" alt="rivers map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Rivers <br> {{ $rivers }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_sokoto" id="disp1">
                            <img src="{{ URL('img/states/sokoto.png') }}" alt="sokoto map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Sokoto <br> {{ $sokoto }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_taraba" id="disp1">
                            <img src="{{ URL('img/states/taraba.png') }}" alt="taraba map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Taraba <br> {{ $taraba }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_yobe" id="disp1">
                            <img src="{{ URL('img/states/yobe.png') }}" alt="yobemap" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Yobe <br> {{ $yobe }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_zamfara" id="disp1">
                            <img src="{{ URL('img/states/zamfara.png') }}" alt="zamfara map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Zamfara <br> {{ $zamfara }}
                            </span>
                        </span>

                        <span class="main_chart2_grieve_state_map_borno" id="disp1">
                            <img src="{{ URL('img/states/borno.png') }}" alt="borno map" class="main_chart2_grieve_state_map_abia_img">
                            <span class="main_chart2_grieve_state_map_abia_hover">
                                Borno <br> {{ $borno }}
                            </span>
                        </span>
                    </span>


                </span>

                <span class="main_chart2_grieve_complain">
                    <span class="main_chart2_grieve_category">
                        <span class="main_chart2_grieve_category_header">
                            <label class="main_chart2_grieve_category_header_lab">
                                Grieviances Complaint Mode
                            </label>



                            {{--  <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn1">

                            <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn1">  --}}
                        </span>

                        <span class="main_chart2_grieve_category_chart">
                            <span id="container4"> </span>

                            <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve_mode0">
                                Grieviance <br> Complaint <br> Mode
                            </span>

                            <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve_mode1" style="display:none">
                                Individual  <br> Registration <br> {{ $mode1 }}
                            </span>

                            <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve_mode2" style="display:none">
                                Email  <br> Registration <br> {{ $mode2 }}
                            </span>

                            <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve_mode3" style="display:none">
                                Phone  <br> Registration <br> {{ $mode3 }}
                            </span>

                            <span class="main_chart2_grieve_category_chart_text" id="main_chart2_grieve_mode4" style="display:none">
                                Phone  <br> Registration  {{ $mode4 }}
                            </span>
                        </span>
                </span>
            </div>
        </div>

    </body>
    <script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL('js/national/home.js') }}"></script>

    <script>
        $(document).ready(function () {
                $('#main_chart1_oval_header_drop').on('change', function () {
                    var chart_date = this.value;
                    //alert("sdsdsdsd" + chart_date);
                    document.cookie = "name = "  + chart_date;
                    $.ajax({
                        url: "{{ route('chart_date') }}",   
                    });
                    //window.location.reload('container1');
                    $("#container").load(location.href + "#container");
                });

                $('#main_chart1_bar_header_lab').on('change', function () {
                    var chart_date = this.value;
                    //alert("sdsdsdsd" + chart_date);

                    document.cookie = "chart_states = "  + chart_date;
                    window.location.href = "{{ route('chart_states') }}";
                    //$.ajax({
                        //url: "{{ route('chart_states') }}",
                    //});
                    //window.location.reload();
                   // window.location.reload(true);
                    //$( "#main_chart1_bar_chart" ).load(window.location.href + " #main_chart1_bar_chart" );
                });

                //code for change in bar chart
                $('#main_chart1_bar_header_lab_drop').on('change', function () {
                    
                    var bar_change = this.value;
                    alert(bar_change);
                    document.cookie = "bar_change = "  + bar_change;

                    $.ajax({
                        url: "{{ route('bar_change') }}"   
                    });

                    //window.location.reload('#container1');
                    //$("#container1").load(location.href + "#container1");
                    //$("#datatable").load(location.href + "#datatable");
                });
                //end of code for change in bar chart

                //$('#main_notification_box_close').on('click', function () {
                    //alert("NAssco");

                    //$.ajax({
                        //url: "{{ route('chart_date') }}",   
                    //});
                //});

        });

        //grieviance summary code
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: "#EFEDED",
                        plotBorderWidth: 20,
                        height: 205,
                        plotBorderColor: "#EFEDED",
                        plotShadow: false,
                        type: 'pie'

                    },
                    title: {
                        text: ''
                    },

                    credits: {
                        enabled: false
                    },

                    plotOptions: {
                        pie: {
                            type: 'doughnut',
                            allowPointSelect: true,
                            cursor: 'pointer',
                            colors: pieColors,
                            dataLabels: {
                                enabled: false,
                                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                                distance: -90,

                            }
                        }
                    },
                    series: [{
                        name: 'Percentage',
                        innerSize: '70%',
                        data: [
                            { name: 'Resolved', y: {{ session::get('chart_a') }}, id: 'sheddy1'},
                            { name: 'Pending', y: {{ session::get('chart_b') }}, id: 'sheddy2'},
                            { name: 'New cases', y: {{ session::get('chart_c') }}, id: 'sheddy3'},
                        ],
                        point: {
                            events: {
                                click: function() {
                                    //var a = this.y;
                                    //alert(a)
                                    grieve_summary1 = document.getElementById("main_chart1_oval_chart_text1");
                                    grieve_summary2 = document.getElementById("main_chart1_oval_chart_text2");
                                    grieve_summary3 = document.getElementById("main_chart1_oval_chart_text3");
                                    grieve_summary4 = document.getElementById("main_chart1_oval_chart_text4");

                                    //var sum_id = this.id;

                                    //var $self = $(this);
                                    var sum_id =  this.id;

                                    //alert(sum_id);

                                    if(sum_id == "sheddy1"){
                                        if(grieve_summary1.style.display == "none")
                                        {
                                            grieve_summary1.style.display = "block";
                                            grieve_summary2.style.display = "none";
                                            grieve_summary3.style.display = "none";
                                            grieve_summary4.style.display = "none";
                                        }
                                        else{
                                            grieve_summary1.style.display = "none";
                                            grieve_summary2.style.display = "none";
                                            grieve_summary3.style.display = "none";
                                            grieve_summary4.style.display = "block";
                                        }
                                    }
                                    else if(sum_id == "sheddy2")
                                    {
                                        if(grieve_summary2.style.display == "none")
                                        {
                                            grieve_summary2.style.display = "block";
                                            grieve_summary1.style.display = "none";
                                            grieve_summary3.style.display = "none";
                                            grieve_summary4.style.display = "none";
                                        }
                                        else{
                                            grieve_summary2.style.display = "none";
                                            grieve_summary1.style.display = "none";
                                            grieve_summary3.style.display = "none";
                                            grieve_summary4.style.display = "block";
                                        }
                                    }
                                    else if(sum_id == "sheddy3")
                                    {
                                        if(grieve_summary3.style.display == "none")
                                        {
                                            grieve_summary3.style.display = "block";
                                            grieve_summary1.style.display = "none";
                                            grieve_summary2.style.display = "none";
                                            grieve_summary4.style.display = "none";
                                        }
                                        else{
                                            grieve_summary3.style.display = "none";
                                            grieve_summary1.style.display = "none";
                                            grieve_summary2.style.display = "none";
                                            grieve_summary4.style.display = "block";
                                        }
                                    }


                                    
                                }
                            }
                        },
                        
                    }]
                });

                //grieviance catergory code
                Highcharts.chart('container4', {
                    chart: {
                        plotBackgroundColor: "#EFEDED",
                        plotBorderWidth: 20,
                        height: 205,
                        plotBorderColor: "#EFEDED",
                        plotShadow: false,
                        type: 'pie'

                    },
                    title: {
                        text: ''
                    },

                    credits: {
                        enabled: false
                    },

                    plotOptions: {
                        pie: {
                            type: 'doughnut',
                            allowPointSelect: true,
                            cursor: 'pointer',
                            colors: pieColors,
                            dataLabels: {
                                enabled: false,
                                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                                distance: -90,

                            }
                        }
                    },
                    series: [{
                        name: 'Percentage',
                        innerSize: '70%',
                        data: [
                            { name: 'In person', y: {{ $mode1_per }}, id: 'cat1'},
                            { name: 'Email', y: {{ $mode2_per }}, id: 'cat2'},
                            { name: 'Phone', y: {{ $mode3_per }}, id: 'cat3'},
                            { name: 'Online', y: {{ $mode4_per }}, id: 'cat4'},
                        ],
                        point: {
                                events: {
                                    click: function() {
                                        //var a = this.y;
                                        //alert(a)
                                        grieve_mode0 = document.getElementById("main_chart2_grieve_mode0");
                                        grieve_mode1 = document.getElementById("main_chart2_grieve_mode1");
                                        grieve_mode2 = document.getElementById("main_chart2_grieve_mode2");
                                        grieve_mode3 = document.getElementById("main_chart2_grieve_mode3");
                                        grieve_mode4 = document.getElementById("main_chart2_grieve_mode4");

                                        //var sum_id = this.id;

                                        //var $self = $(this);
                                        var sum_id =  this.id;

                                        //alert(sum_id);

                                        if(sum_id == "cat1"){
                                            if(grieve_mode1.style.display == "none")
                                            {
                                                grieve_mode0.style.display = "none";
                                                grieve_mode1.style.display = "block";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                            else{
                                                grieve_mode0.style.display = "block";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat2")
                                        {
                                            if(grieve_mode2.style.display == "none")
                                            {
                                                grieve_mode0.style.display = "none";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "block";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                            else{
                                                grieve_mode0.style.display = "block";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat3")
                                        {
                                            if(grieve_mode3.style.display == "none")
                                            {
                                                grieve_mode0.style.display = "none";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "block";
                                                grieve_mode4.style.display = "none";
                                            }
                                            else{
                                                grieve_mode0.style.display = "block";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat4")
                                        {
                                            if(grieve_mode4.style.display == "none")
                                            {
                                                grieve_mode0.style.display = "none";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "block";
                                            }
                                            else{
                                                grieve_mode0.style.display = "block";
                                                grieve_mode1.style.display = "none";
                                                grieve_mode2.style.display = "none";
                                                grieve_mode3.style.display = "none";
                                                grieve_mode4.style.display = "none";
                                            }
                                        }

                                    }
                                }
                            },
                    }]
                });
                // end of grieve cat code

                //grieviance catergory code
                Highcharts.chart('container3', {
                    chart: {
                        plotBackgroundColor: "#EFEDED",
                        plotBorderWidth: 20,
                        height: 205,
                        plotBorderColor: "#EFEDED",
                        plotShadow: false,
                        type: 'pie'

                    },
                    title: {
                        text: ''
                    },

                    credits: {
                        enabled: false
                    },

                    plotOptions: {
                        pie: {
                            type: 'doughnut',
                            allowPointSelect: true,
                            cursor: 'pointer',
                            colors: pieColors,
                            dataLabels: {
                                enabled: false,
                                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                                distance: -90,

                            }
                        }
                    },
                    series: [{
                        name: 'Percentage',
                        innerSize: '70%',
                        data: [
                            { name: 'Wrongful inclusion/exclusion', y: {{ $cat1_per }}, id: 'cat1'},
                            { name: 'PAYMENTS AND PAYMENT SERVICE DELIVERY', y: {{ $cat2_per }}, id: 'cat2'},
                            { name: 'NASSP SERVICE DELIVERY ISSUES', y: {{ $cat3_per }}, id: 'cat3'},
                            { name: 'FRAUD AND CORRUPTION ISSUES', y: {{ $cat4_per }}, id: 'cat4'},
                            { name: 'DATA ERRORS AND UPDATES', y: {{ $cat5_per }}, id: 'cat5'},
                            { name: 'INQUIRIES AND INFORMATION REQUESTS', y: {{ $cat6_per }}, id: 'cat6'},
                            { name: 'OTHER', y: {{ $cat7_per }}, id: 'cat7'},
                            { name: 'ABUSE AND SOCIAL ISSUES', y: {{ $cat8_per }}, id: 'cat8'},
                        ],
                        point: {
                                events: {
                                    click: function() {
                                        //var a = this.y;
                                        //alert(a)
                                        grieve_cat0 = document.getElementById("main_chart2_grieve0");
                                        grieve_cat1 = document.getElementById("main_chart2_grieve1");
                                        grieve_cat2 = document.getElementById("main_chart2_grieve2");
                                        grieve_cat3 = document.getElementById("main_chart2_grieve3");
                                        grieve_cat4 = document.getElementById("main_chart2_grieve4");
                                        grieve_cat5 = document.getElementById("main_chart2_grieve5");
                                        grieve_cat6 = document.getElementById("main_chart2_grieve6");
                                        grieve_cat7 = document.getElementById("main_chart2_grieve7");
                                        grieve_cat8 = document.getElementById("main_chart2_grieve8");

                                        //var sum_id = this.id;

                                        //var $self = $(this);
                                        var sum_id =  this.id;

                                        //alert(sum_id);

                                        if(sum_id == "cat1"){
                                            if(grieve_cat1.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "block";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat2")
                                        {
                                            if(grieve_cat2.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "block";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat3")
                                        {
                                            if(grieve_cat3.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "block";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat4")
                                        {
                                            if(grieve_cat4.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "block";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat5")
                                        {
                                            if(grieve_cat5.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "block";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat6")
                                        {
                                            if(grieve_cat6.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "block";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat7")
                                        {
                                            if(grieve_cat7.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "block";
                                                grieve_cat8.style.display = "none";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        else if(sum_id == "cat8")
                                        {
                                            if(grieve_cat8.style.display == "none")
                                            {
                                                grieve_cat0.style.display = "none";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "block";
                                            }
                                            else{
                                                grieve_cat0.style.display = "block";
                                                grieve_cat1.style.display = "none";
                                                grieve_cat2.style.display = "none";
                                                grieve_cat3.style.display = "none";
                                                grieve_cat4.style.display = "none";
                                                grieve_cat5.style.display = "none";
                                                grieve_cat6.style.display = "none";
                                                grieve_cat7.style.display = "none";
                                                grieve_cat8.style.display = "none";
                                            }
                                        }
                                        
                                    }
                                }
                            },
                    }]
                });
                // end of grieve cat code

                Highcharts.chart('container1', {
                    data: {
                        table: 'datatable'
                    },
                    chart: {
                        type: 'column',
                        color: '#627C33',
                        // plotBackgroundColor: "#EFEDED",
                        // BorderColor: "#EFEDED",
                    },
                    title: {
                        text: ''
                    },
                    credits: {
                        enabled: false
                    },
                    subtitle: {
                        text:
                            ''
                    },
                    xAxis: {
                        type: '',
                        title: {
                            text:''
                        }

                    },
                    yAxis: {
                        allowDecimals: false,
                        title: {
                            text: ''
                        }
                    },
                    xAxis: {
                        allowDecimals: false,
                    },
                    tooltip: {

                    },
                    plotOptions: {
                        column: {
                            borderRadius: 0,
                            borderRadiusTopLeft: '20',
                            borderRadiusTopRight: '20',
                            color: '#627C33',
                        },

                        series: {
                            
                            label: {
                                connectorAllowed: false,
                                show: false,
                                display: false
                            },
                            showInLegend: false,
                            }
                        },

                });

    </script>

</html>
