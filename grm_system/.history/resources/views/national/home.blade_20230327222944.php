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

<body>
    <input type="checkbox" id="check_nav" style="display: none" checked>
    <nav>

        <label class="dashboard_nassp" for="check_nav">
            <img src="{{ URL('img/nassco_logo.png') }}" alt="Dashboard Icon" class="dashboard_nassp_icon">
            <span class="dashboard_nassp_desc" id="dashboard_nassp_desc">NASSP GRIEVANCE CENTER</span>
        </label>
        <ul class="ul_whole">
            <li>
                <a href="#">
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
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Grieviance List</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <img src="{{ URL('img/gro_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">GRO Reports</span>
                </a>
            </li>
            <li>
                <a href="#">
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
        <div class="main_header">
            <span class="main_header_name">
                <label class="main_header_name_name">Welcome, Amba Daniel</label>
                <label class="main_header_name_desc">Here’s an update on GRM today</label>
            </span>

            <span class="main_header_desc">
                <span class="main_header_desc1">
                    <img src="{{ URL('img/dropdown.png') }}" alt="dropdown image" class="main_header_desc1_icon">
                    <label class="main_header_desc1_name">Amba Daniel</label>
                    <label class="main_header_desc1_desc">GRM Manager</label>
                </span>

                <img src="{{ URL('img/male.png') }}" alt="MAle Icon" class="main_header_desc1_desc_male_icon">

                <img src="{{ URL('img/notification.png') }}" alt="notification Icon" class="main_header_desc1_desc_not_icon">

                <img src="{{ URL('img/search1.png') }}" alt="search Icon" class="main_header_desc1_desc_search_icon">
            </span>
        </div>

        <div class="main_summary">
            <span class="main_summary1">
                <label class="main_summary_recorded_name">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary1">
                <label class="main_summary_recorded_name">Total Grievances Resolved</label>

                <label class="main_summary_recorded_num">60</label>

                <label class="main_summary_recorded_name1">Resolved Cases</label>

                <img src="{{ URL('img/resolved1.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary1">
                <label class="main_summary_recorded_name">Total Grievances Under Review</label>

                <label class="main_summary_recorded_num">26</label>

                <label class="main_summary_recorded_name1">Review Grievances</label>

                <img src="{{ URL('img/review1.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary1">
                <label class="main_summary_recorded_name">New Grievances</label>

                <label class="main_summary_recorded_num">03</label>

                <label class="main_summary_recorded_name1">New Cases</label>

                <img src="{{ URL('img/new.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>
        </div>

        <div class="main_chart1">
            <span class="main_chart1_oval">
                <span class="main_chart1_oval_header">
                    <label class="main_chart1_oval_header_desc">Grievance Summary</label>

                    <select name="" class="main_chart1_oval_header_drop">
                        <option value="cur_month">This Month</option>
                    </select>
                </span>

                <span class="main_chart1_oval_desc">
                    <span class="main_chart1_oval_desc1">
                            <label class="main_chart1_oval_desc1_lab">
                                <img src="{{ URL('img/blue_circle.png') }}" alt="" >
                                Resolved
                            </label>
                    </span>

                    <span class="main_chart1_oval_desc2">
                        <label class="main_chart1_oval_desc1_lab">
                            <img src="{{ URL('img/red_circle.png') }}" alt="" >
                            Under Review
                        </label>
                    </span>

                    <span class="main_chart1_oval_desc3">
                        <label class="main_chart1_oval_desc1_lab">
                            <img src="{{ URL('img/green_circle.png') }}" alt="" >
                            New cases
                        </label>
                    </span>
                </span>

                <span class="main_chart1_oval_chart" >
                    <span id="container"> </span>
                </span>

                {{--  <div id="container" class="main_chart1_oval_chart" ></div>  --}}


            </span>



            <span class="main_chart1_bar">
                <span class="main_chart1_bar_header">
                    <label class="main_chart1_bar_header_lab">All Wards</label>

                    <select class="main_chart1_bar_header_lab_drop">
                        <option value="wards">Wards</option>
                    </select>
                </span>

                <span class="main_chart1_bar_chart">
                    <span id="container1"></span>

                    <table id="datatable">
                        <thead>
                        <tr >
                            <th>asasas</th>
                            <th>Boys</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Atrikyase</th>
                                <td>32</td>
                            </tr>
                            <tr>
                                <th>Begal</th>
                                <td>45</td>
                            </tr>
                            <tr>
                                <th>Mnbaka</th>
                                <td>85</td>
                            </tr>
                            <tr>
                                <th>mnbaguza</th>
                                <td>28</td>
                            </tr>
                            <tr>
                                <th>wisha</th>
                                <td>38</td>
                            </tr>
                            <tr>
                                <th>Okokolo</th>
                                <td>54</td>
                            </tr>
                        </tbody>
                    </table>
                </span>
            </span>
        </div>

        <div class="main_chart2">
            <span class="main_chart2_grieve_category">
                <span class="main_chart2_grieve_category_header">
                    <label class="main_chart2_grieve_category_header_lab">
                        Grieviance Category
                    </label>

                    <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn">

                    <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn">
                </span>

                <span class="main_chart2_grieve_category_chart">
                    <span id="container3"> </span>

                    <span class="main_chart2_grieve_category_chart_text">
                        Social Register <br> Issues <br> 6
                    </span>
                </span>
            </span>

            <span class="main_chart2_grieve_state">
                <span class="main_chart2_grieve_category_header">
                    <label class="main_chart2_grieve_category_header_lab">
                        Total Grieviances By States
                    </label>

                    <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn2">

                    <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn2">
                </span>

                {{--  nigeria map code  --}}
                <span class="main_chart2_grieve_state_map">
                    <span class="main_chart2_grieve_state_map_abia" id="disp1">
                        <img src="{{ URL('img/states/abia.png') }}" alt="abia map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Abia <br> 18
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_adamawa" id="disp1">
                        <img src="{{ URL('img/states/adamawa.png') }}" alt="adamawa map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Adamawa <br> 56
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_akwa_ibom" id="disp1">
                        <img src="{{ URL('img/states/akwa_ibom.png') }}" alt="akwa_ibom map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Akwa Ibom <br> 26
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_bauchi" id="disp1">
                        <img src="{{ URL('img/states/bauchi.png') }}" alt="bauchi map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Bauchi <br> 66
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_anambra" id="disp1">
                        <img src="{{ URL('img/states/anambra.png') }}" alt="anambra map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Anambra <br> 73
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_bayelsa" id="disp1">
                        <img src="{{ URL('img/states/bayelsa.png') }}" alt="bayelsa map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Bayelsa <br> 44
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_benue" id="disp1">
                        <img src="{{ URL('img/states/benue.png') }}" alt="benue map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Benue <br> 38
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_cross_river" id="disp1">
                        <img src="{{ URL('img/states/cross_river.png') }}" alt="cross_river map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Cross River <br> 73
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_delta" id="disp1">
                        <img src="{{ URL('img/states/delta.png') }}" alt="delta map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Delta <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_ebonyi" id="disp1">
                        <img src="{{ URL('img/states/ebonyi.png') }}" alt="ebonyi map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Ebonyi <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_edo" id="disp1">
                        <img src="{{ URL('img/states/edo.png') }}" alt="edo map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Edo <br> 92
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_ekiti" id="disp1">
                        <img src="{{ URL('img/states/ekiti.png') }}" alt="ekiti map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Ekiti <br> 61
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_enugu" id="disp1">
                        <img src="{{ URL('img/states/enugu.png') }}" alt="enugu map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            ENugu <br> 44
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_fct" id="disp1">
                        <img src="{{ URL('img/states/fct.png') }}" alt="fct map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            F.C.T <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_gombe" id="disp1">
                        <img src="{{ URL('img/states/gombe.png') }}" alt="gombe map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Gombe <br> 58
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_imo" id="disp1">
                        <img src="{{ URL('img/states/imo.png') }}" alt="imo map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Imo <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_jigawa" id="disp1">
                        <img src="{{ URL('img/states/jigawa.png') }}" alt="jigawa map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Jigawa <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kaduna" id="disp1">
                        <img src="{{ URL('img/states/kaduna.png') }}" alt="kaduna map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kaduna <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kano" id="disp1">
                        <img src="{{ URL('img/states/kano.png') }}" alt="kano map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kano <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kastina" id="disp1">
                        <img src="{{ URL('img/states/kastina.png') }}" alt="kastina map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kastina <br> 52
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kebbi" id="disp1">
                        <img src="{{ URL('img/states/kebbi.png') }}" alt="kebbi map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kebbi <br> 53
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kogi" id="disp1">
                        <img src="{{ URL('img/states/kogi.png') }}" alt="kogi map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kogi <br> 59
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_kwara" id="disp1">
                        <img src="{{ URL('img/states/kwara.png') }}" alt="kwara map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Kwara <br> 59
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_ogun" id="disp1">
                        <img src="{{ URL('img/states/ogun.png') }}" alt="ogun map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Ogun <br> 59
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_niger" id="disp1">
                        <img src="{{ URL('img/states/niger.png') }}" alt="niger map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Niger <br> 59
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_nassarawa" id="disp1">
                        <img src="{{ URL('img/states/nassarawa.png') }}" alt="nassarawa map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Nassarawa <br> 59
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_lagos" id="disp1">
                        <img src="{{ URL('img/states/lagos.png') }}" alt="lagos map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Lagos <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_ondo" id="disp1">
                        <img src="{{ URL('img/states/ondo.png') }}" alt="ondo map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Ondo <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_osun" id="disp1">
                        <img src="{{ URL('img/states/osun.png') }}" alt="osun map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Osun <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_oyo" id="disp1">
                        <img src="{{ URL('img/states/oyo.png') }}" alt="oyo map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Oyo <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_plateau" id="disp1">
                        <img src="{{ URL('img/states/plateau.png') }}" alt="plateau map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Plateau <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_rivers" id="disp1">
                        <img src="{{ URL('img/states/rivers.png') }}" alt="rivers map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Rivers <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_sokoto" id="disp1">
                        <img src="{{ URL('img/states/sokoto.png') }}" alt="sokoto map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Sokoto <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_taraba" id="disp1">
                        <img src="{{ URL('img/states/taraba.png') }}" alt="taraba map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Taraba <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_yobe" id="disp1">
                        <img src="{{ URL('img/states/yobe.png') }}" alt="yobemap" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Yobe <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_zamfara" id="disp1">
                        <img src="{{ URL('img/states/zamfara.png') }}" alt="zamfara map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Zamfara <br> 85
                        </span>
                    </span>

                    <span class="main_chart2_grieve_state_map_borno" id="disp1">
                        <img src="{{ URL('img/states/borno.png') }}" alt="borno map" class="main_chart2_grieve_state_map_abia_img">
                        <span class="main_chart2_grieve_state_map_abia_hover">
                            Borno <br> 85
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



                        <img src="{{ URL('img/up.png') }}" alt="up button" class="main_chart2_grieve_category_header_up_btn1">

                        <img src="{{ URL('img/down.png') }}" alt="down button" class="main_chart2_grieve_category_header_down_btn1">
                    </span>

                    <span class="main_chart2_grieve_category_chart">
                        <span id="container4"> </span>

                        <span class="main_chart2_grieve_category_chart_text">
                            Social Register <br> Issues <br> 6
                        </span>
                    </span>
            </span>
        </div>
    </div>

</body>
<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/national/home.js') }}"></script>

</html>
