<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL('css/national/nav.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</head>
<body>

<input type="checkbox" id="check_nav" style="display: none" checked>
        <nav>
            @yield('nav')
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
                    <a href="{{ route('national_reports') }}">
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
    
</body>

<script src="{{ URL('js/national/nav.js') }}"></script>

</html>