<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRM Reports</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/national/gro.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

                <label class="header_grieviance">GRM Reports</label>

                <label class="header_location">
                    <img src="{{ url('img/home.png') }}" >
                    /GRM Reports
                </label>
        </div>

        <div class="info">
            <div class="info_category">
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

            <div class="info_status"></div>

            <div class="info_complain"></div>
        </div>
    </div>
</body>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/national/home.js') }}"></script>

</html>