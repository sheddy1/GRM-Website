<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
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

    <div class="scroller mySwiper">
            <div class="swiper-wrapper scroller_wrapper">
                <div class="content_slide1 swiper-slide">
                    <img src="{{ URL('img/slider_image1.png') }}" alt="slider image" class="content_slide1_image">

                    <div class="content_slide1_intro">
                        NASSP GRM
                    </div>

                    <div class="content_slide1_desc">
                        National Social Safety Project GRM system focuses on proper management of
                        grievance cases and aslo to facilitate the efficient management of grievance cases,
                        to aid the Grievance Redress Officers and Managers at all levels

                    </div>

                    <button class="content_slide1_btn">
                        Read More
                    </button>
                </div>

                <div class="content_slide1 swiper-slide">
                    <img src="{{ URL('img/slider_image1.png') }}" alt="slider image" class="content_slide1_image">

                    <div class="content_slide1_intro">
                        NASSP GRM
                    </div>

                    <div class="content_slide1_desc">
                        National Social Safety Project GRM system focuses on proper management of
                        grievance cases and aslo to facilitate the efficient management of grievance cases,
                        to aid the Grievance Redress Officers and Managers at all levels

                    </div>

                    <button class="content_slide1_btn">
                        Read More
                    </button>
                </div>

                <div class="content_slide1 swiper-slide">
                    <img src="{{ URL('img/slider_image1.png') }}" alt="slider image" class="content_slide1_image">

                    <div class="content_slide1_intro">
                        NASSP GRM
                    </div>

                    <div class="content_slide1_desc">
                        National Social Safety Project GRM system focuses on proper management of
                        grievance cases and aslo to facilitate the efficient management of grievance cases,
                        to aid the Grievance Redress Officers and Managers at all levels

                    </div>

                    <button class="content_slide1_btn">
                        Read More
                    </button>
                </div>

            </div>


        {{--  <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>  --}}
      <div class="swiper-pagination"></div>
    </div>

    <div class="record">
        <div class="record_recorded">
            <img src="{{ URL('img/greive.png') }}" alt="recorded grieviances" class="record_recorded_img">

            <label class="record_recorded_no">
                86
            </label>

            <div class="record_recorded_des">
                Total Grievances Recorded
            </div>
        </div>

        <div class="record_resolved">
            <img src="{{ URL('img/greive.png') }}" alt="recorded grieviances" class="record_recorded_img">

            <label class="record_recorded_no">
                86
            </label>

            <div class="record_recorded_des">
                Total Grievances Recorded
            </div>
        </div>

        <div class="record_review">
            <img src="{{ URL('img/greive.png') }}" alt="recorded grieviances" class="record_recorded_img">

            <label class="record_recorded_no">
                60
            </label>

            <div class="record_recorded_des">
                Total Grievances Recorded
            </div>
        </div>
    </div>

</body>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/welcome.js') }}"></script>

</html>
