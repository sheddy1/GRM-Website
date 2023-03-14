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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <input type="checkbox" id="check_nav" style="display: none">
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
            <span class="main_summary_recorded">
                <label class="main_summary_recorded_name">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary_resolved">
                <label class="main_summary_recorded_name">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary_review">
                <label class="main_summary_recorded_name">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>

            <span class="main_summary_new">
                <label class="main_summary_recorded_name">Total Grievances Recorded</label>

                <label class="main_summary_recorded_num">86</label>

                <label class="main_summary_recorded_name1">Total Grievances</label>

                <img src="{{ URL('img/record.png') }}" alt="Record Image" class="main_summary_recorded_image">
            </span>
        </div>

        <div class="main_chart1"></div>

        <div class="main_chart2"></div>
    </div>

</body>
<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/national/home.js') }}"></script>

</html>
