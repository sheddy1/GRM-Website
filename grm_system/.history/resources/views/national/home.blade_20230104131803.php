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
            <span class="dashboard_nassp_desc">NASSP GRIEVANCE CENTER</span>
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
                    Grievances
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
            <label >
                <img src="{{ URL('img/logout_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                <span class="nav_item">Logout</span>
            </label>
        </span>
    </nav>

</body>
<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/national/home.js') }}"></script>

</html>
