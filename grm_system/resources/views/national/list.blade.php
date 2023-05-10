<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grieviance List</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/national/list.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<input type="checkbox" id="check_nav" style="display: none" checked>
    <nav>

        <label class="dashboard_nassp" for="check_nav">
            <img src="{{ URL('img/nassco_logo.png') }}" alt="Dashboard Icon" class="dashboard_nassp_icon">
            <span class="dashboard_nassp_desc" id="dashboard_nassp_desc">NASSP GRIEVANCE CENTER</span>
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
        <div class="header">
            <span class="header_line"></span>

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

            <label class="header_grieviance">Grieviances</label>

            <label class="header_location">
                <img src="{{ url('img/home.png') }}" >
                /Grieviancs
            </label>
        </div>

        <div class="main_summary">
            <span class="main_summary_recorded main_summary1">
                <label class="main_summary_recorded_name5">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image1">
            </span>

            <span class="main_summary_resolved main_summary1">
                <label class="main_summary_recorded_name6">Total Grievances Resolved</label>

                <label class="main_summary_recorded_num1">60</label>

                <label class="main_summary_recorded_name2">Resolved Cases</label>

                <img src="{{ URL('img/resolved1.png') }}" alt="Record Image" class="main_summary_recorded_image2">
            </span>

            <span class="main_summary_review main_summary1">
                <label class="main_summary_recorded_name7">Total Grievances Under Review</label>

                <label class="main_summary_recorded_num2">26</label>

                <label class="main_summary_recorded_name3">Review Grievances</label>

                <img src="{{ URL('img/review1.png') }}" alt="Record Image" class="main_summary_recorded_image3">
            </span>

            <span class="main_summary_new main_summary1">
                <label class="main_summary_recorded_name8">Total Grievances Under Review</label>

                <label class="main_summary_recorded_num2">26</label>

                <label class="main_summary_recorded_name4">Review Grievances</label>

                <img src="{{ URL('img/new.png') }}" alt="Record Image" class="main_summary_recorded_image4">
            </span>
        </div>

        <div class="info">
            <span class="info_header">
                <span class="info_header_bottom_line"></span>
                <label class="info_header_grieviance">All Grieviances</label>

                <button class="info_share">
                    <img src="{{ url('img/share.png') }}" alt="filter_image">
                    Share
                </button>

                <button class="info_filter1">
                    <img src="{{ url('img/filter1.png') }}" alt="filter_image">
                    Filter
                </button>

                <button class="info_filter2">
                    <img src="{{ url('img/filter2.png') }}" alt="filter_image">
                    Filter
                </button>

                <span class="info_header_search">
                    <img src="{{ url('img/search2.png') }}" class="info_share_img" alt="search_image">
                    <input type="text" class="info_header_Searchbox" placeholder="Search...">
                </span>
            </span>

            <table class="info_table">


                    <tr class="thead">
                        
                        <th >
                            <input type="checkbox">
                        </th>
                        <th class="info_table_header_text">
                            GRM RefNo
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            State
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            LGA 
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Ward 
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Community
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>  
                        <th class="info_table_header_text">
                            Name
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Phone
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Category
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Sub Category 
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Complain Mode
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            Resolved
                            <img src="{{ url('img/attach1.png') }}" alt="filter_image">
                        </th>
                        <th class="info_table_header_text">
                            <img src="{{ url('img/left.png') }}" alt="filter_image" class="info_table_left">
                        </th>

                    </tr> 

                    
                    @foreach ($grieviance as $key => $data)

                    <tr class="tbody">
                        <td class="info_table_header_text"> 
                            <input type="checkbox">
                        </td>
                        <td class="info_table_header_text1">{{ $data->track }}</td>
                        <td class="info_table_header_text1">{{ $data->state }}</td> 
                        <td class="info_table_header_text1">{{ $data->lga }}</td> 
                        <td class="info_table_header_text1">{{ $data->ward }}</td> 
                        <td class="info_table_header_text1">{{ $data->community }}</td> 
                        <td class="info_table_header_text1">{{ $data->name }}</td> 
                        <td class="info_table_header_text1">{{ $data->phone }}</td> 
                        <td class="info_table_header_text1">{{ $data->category }}</td> 
                        <td class="info_table_header_text1">{{ $data->sub_category }}</td> 
                        <td class="info_table_header_text1">{{ $data->cmode }}</td> 
                        <td class="info_table_header_text1">{{ $data->resolved }}</td> 
                        <td class="info_table_header_text1"></td> 
                    </tr>

                    @endforeach

                
            </table>
        </div>
    </div>
</body>

<script src="{{ URL('js/national/home.js') }}"></script>

</html>