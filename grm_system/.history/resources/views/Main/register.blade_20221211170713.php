<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/main/welcome.css') }}">
    <link rel="stylesheet" href="{{ URL('css/main/register.css') }}">
</head>
<body>
    <div class="header" id="header">
        <img src="{{ URL('img/wb_logo.png') }}" alt="world bank logo" class="header_wblogo">
        <img src="{{ URL('img/nassco_logo.png') }}" alt="world bank logo" class="header_naslogo">

        <label class="header_logo_name">NASSP Greviance Center</label>

        <input type="checkbox" id="check">
        <label for="check">
            <img src="{{ URL('img/menu.png') }}" alt="menu icon" id="btn">
            <img src="{{ URL('img/cancel.png') }}" alt="cancel button" id="cancel">
        </label>

        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="home#record">About</a></li>
            <li><a href="{{ route('register_main') }}">Register Grieviance</a></li>
            <li><a href="home#steps2">Help</a></li>
            <li>
                <a href="">
                    Staff/Admin Login
                    {{--  <img src="{{ URL('img/person.png') }}" alt="Person Image" class="header_personlogo">  --}}
                </a>

            </li>
        </ul>
    </div>

    <form action="" class="form" method="post">

    </form>
</body>
</html>
