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

    <div class="header2"></div>

    <form action="" class="form" method="post">

        {{--  <img src="{{ URL('img/nassco_logo.png') }}" alt="Nassp Background Logo" class="form_wblogo">  --}}

        <div class="form_header">
            GRIEVIANCE REGISTRATION FORM
        </div>

        <div class="form_header2">
            Kindly provide all neccesary complaints before submitting
        </div>

        {{--  state code  --}}
        <div class="form_name">
            <span class="form_name_desc">
                STATE
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="state">State</option>
            </select>
        </div>

        <div class="form_lga">
            <span class="form_name_desc">
                LGA
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="state">LGA</option>
            </select>
        </div>

        <div class="form_zone">
            <span class="form_name_desc">
                ZONE
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="state">ZONE</option>
            </select>
        </div>

        <div class="form_ward">
            <span class="form_name_desc">
                WARD
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="LGA">WARD</option>
            </select>
        </div>

        <div class="form_community">
            <span class="form_name_desc">
                COMMUNITY
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="LGA">COMMUNITY</option>
            </select>
        </div>

        {{--  beneficiary code  --}}
        <div class="form_ben">
            <span class="form_name_desc">
                IS BENEFICIARY
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="LGA">YES</option>
            </select>
        </div>

        {{--  complaint name code --}}
        <div class="form_cname">
            <span class="form_name_desc">
                COMPLAINT NAME
            </span>

            <input type="text" class="form_name_select1" placeholder="NAME">
        </div>

        <div class="form_gender">
            <span class="form_name_desc">
                GENDER
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="LGA">GENDER</option>
            </select>
        </div>

        <div class="form_age">
            <span class="form_name_desc">
                AGE
            </span>

            <select name="form_name_select" class="form_name_select">
                <option value="LGA">AGE</option>
            </select>
        </div>

        <div class="form_cphone">
            <span class="form_name_desc">
                COMPLAINT PHONE
            </span>

            <input type="text" class="form_name_select1" placeholder="COMPLAINT PHONE">
        </div>

        <div class="form_cemail">
            <span class="form_name_desc">
                COMPLAINT EMAIL
            </span>

            <input type="text" class="form_name_select1" placeholder="COMPLAINT EMAIL">
        </div>

        <div class="form_desc">
            <span class="form_name_desc">
                DESCRIPTION
            </span>

            <textarea class="form_name_select2" placeholder="DESCRIPTION">

            </textarea>
        </div>

        <div class="form_btn">
            <button class="form_btn1">
                SUBMIT
            </button>

            <button class="form_btn2">
                CLEAR
            </button>
        </div>
    </form>

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

            <a href="{{ route('home') }}" class="footer_links_home1 footer_links_home1a"> > Home Page</a>

            <a href="home#record" class="footer_links_about footer_links_home1a"> > About</a>

            <a href="{{ route('register_main') }}" class="footer_links_reg footer_links_home1a"> > Register Grieviance</a>

            <a href="home#steps2" class="footer_links_help footer_links_home1a"> > Help</a>

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

</body>
</html>
