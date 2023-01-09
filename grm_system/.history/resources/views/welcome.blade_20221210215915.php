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
            <p class="step1_intro">Help?</p>

            <p class="help_desc">
                If you have any problem or need any help in
                filling out the grievance form, kindly reach
                to our social media handles or the NASSCO
                main website for further directives.
            </p>
        </div>

        <div class="help_step2">
            <p class="step1_intro">FAQ!</p>

            <p class="help_desc">
                Frequently asked questions will be displayed here!
            </p>
        </div>


    </div>

    <div class="social">
        <div class="step1">
            <a href="#">
                <img src="{{ URL('img/facebook.png') }}" alt="facebook image" class="social_facebook">
            </a>

            <a href="#">
                <img src="{{ URL('img/twitter.png') }}" alt="twitter image" class="social_twitter">
            </a>

            <p class="social_desc1">
                NasscoNigeria
            </p>

            <a href="">
                <p class="social_desc2">
                    www.nassp.gov.ng
                </p>
            </a>


        </div>
    </div>

    <footer>
        <div class="footer_nassp">
            {{--  <img src="{{ URL('img/nassco_logo.png') }}" alt="NAssp Logo" class="footer_nassp_logo">  --}}

            <p class="footer_nassp_intro">NASSCO</p>

            <p class="footer_nassp_desc">
                Facilitate and support State Operations Coordinating
                Units (SOCUs) to conduct identification and registration
                of Poor and Vulnerable Households (PVHHs) <br>
                Generate knowledge to inform policy and
                programming (e.g. livelihoods, knowledge management)
            </p>
        </div>

        <div class="footer_links">
            <p class="footer_links_intro">Quick Links</p>

            <a href="#" class="footer_links_home1 footer_links_home1a"> > Home Page</a>

            <a href="#" class="footer_links_about footer_links_home1a"> > About</a>

            <a href="#" class="footer_links_reg footer_links_home1a"> > Register Grieviance</a>

            <a href="#" class="footer_links_help footer_links_home1a"> > Help</a>

            <a href="#" class="footer_links_login footer_links_home1a"> > Staff/Admin Login</a>
        </div>

        <div class="footer_contact">
            <p class="footer_links_intro">Locate Us</p>

            <p class="footer_contact_desc1 footer_links_home1a">
                Head Office
            </p>

            <p class="footer_contact_desc2 footer_links_home1a">
                76 Aki Akilu Cresent State House
            </p>

            <p class="footer_contact_desc3 footer_links_home1a">
                Abuja, Nigeria.
            </p>

            <p class="footer_contact_desc4 footer_links_home1a">
                +23494992011
            </p>

            <p class="footer_contact_desc5 footer_links_home1a">
                info.nassco@nassp.gov.ng
            </p>
        </div>
    </footer>

    <div class="container copyright">
        <div class="copyright_desc">
            <img src="{{ URL('img/copyright.png') }}" alt="copyright Logo" class="copyright_logo"> </n>

            <p></p>
        </div>
    </div>

</body>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/welcome.js') }}"></script>

</html>
