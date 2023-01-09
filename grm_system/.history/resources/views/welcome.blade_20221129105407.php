<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/welcome.css') }}">
</head>
<body>
    <div class="header">
        <img src="{{ URL('img/wb_logo.png') }}" alt="world bank logo" class="header_wblogo">
        <img src="{{ URL('img/nassco_logo.png') }}" alt="world bank logo" class="header_naslogo">

        <label class="header_logo_name">NASSP Greviance Center</label>

        <input type="checkbox" id="check">
        <label for="check">
            <img src="{{ URL('img/menu.png') }}" alt="menu icon" id="btn">
            <img src="{{ URL('img/cancel.png') }}" alt="cancel button" id="cancel">
        </label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Register Grieviance</a></li>
            <li><a href="">Help</a></li>
            <li>
                <a href="">
                    Staff/Admin Login
                    {{--  <img src="{{ URL('img/person.png') }}" alt="Person Image" class="header_personlogo">  --}}
                </a>

            </li>
        </ul>
    </div>

    <div class="scroller">
        <div class="swiper myswipper">
            <div class="swiper-wrapper scroller_wrapper">
                <div class="content_slide1 swiper-slide">

                </div>
            </div>
        </div>

        {{--  <div class="swiper-pagination"></div>  --}}
    </div>
</body>
</html>
