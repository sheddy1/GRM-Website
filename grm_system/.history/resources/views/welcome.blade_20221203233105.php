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

    //code for scrolling images
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
            <img src="{{ URL('img/resolved.png') }}" alt="recorded grieviances" class="record_recorded_img">

            <label class="record_recorded_no">
                60
            </label>

            <div class="record_recorded_des">
                Total Grievances Resolved
            </div>
        </div>

        <div class="record_review">
            <img src="{{ URL('img/review.png') }}" alt="recorded grieviances" class="record_recorded_img">

            <label class="record_recorded_no">
                26
            </label>

            <div class="record_recorded_des">
                Total Grievances Under review
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about_main">
            <label class="about_main_intro">ABOUT</label>

            <p class="about_main_desc">
                A grievance under the National Social Safety
                Nets Coordinating Office (NASSCO)
                is a formal complaint made by beneficiaries and non-beneficiaries
                on their dissatisfaction with the delivery of services, lack
                of or inadequate information on Programme activities, staff
                conduct and overall implementation of the Programme
            </p>

            <button class="about_main_btn">
                Read more
            </button>
        </div>

        <div class="about_nassp">
            <label class="about_main_intro">ABOUT NASSP</label>

            <p class="about_main_desc">
                The National Social Safety Nets Project,
                provides system building blocks that allow
                the Government to target and deliver a range
                of programs to poor and vulnerable households
                (PVHH) more effectively and efficiently through
                the dynamic 'use' of the National Social Registry (NSR).

            </p>

            <button class="about_main_btn">
                Read more
            </button>
        </div>
    </div>

    <div class="steps">
        <div class="step1">
            <p class="step1_intro">STEPS TO REGISTER GRIEVANCE</p>

            <div class="step1_no">
                1
            </div>

            <p class="step1_desc">
                To register a complaint, click on the “REGISTER GRIEVANCE” menu on the top header.
            </p>

            <img src="{{ URL('img/click.png') }}" alt="Click Icon" class="step1_img">
        </div>

        <div class="step2">
            <p class="step1_intro">STEPS...</p>

            <div class="step1_no">
                2
            </div>

            <p class="step1_desc">
                A Grievance form will be displayed, kindly fill out
                the neccessary required information and the nature of your grievance.
            </p>

            <img src="{{ URL('img/form.png') }}" alt="Click Icon" class="step1_img2">
        </div>
    </div>


    //code for steps 3 and 4
    <div class="steps2">
        <div class="step1">
            <p class="step1_intro">STEPS...</p>

            <div class="step1_no">
                3
            </div>

            <p class="step1_desc">
                After successfully filling out the form,
                click on the submit button to place your grievance.
            </p>

            <img src="{{ URL('img/Submit.png') }}" alt="Click Icon" class="step1_img">
        </div>

        <div class="step2">
            <p class="step1_intro">STEPS...</p>

            <div class="step1_no">
                4
            </div>

            <p class="step1_desc">
                Your complaint will be looked into immiediately upon submission.
            </p>

            <img src="{{ URL('img/looked.png') }}" alt="Click Icon" class="step1_img2">
        </div>
    </div>

    <div class="help">
        <div class="step1">
        </div>
    </div>

</body>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/welcome.js') }}"></script>

</html>
