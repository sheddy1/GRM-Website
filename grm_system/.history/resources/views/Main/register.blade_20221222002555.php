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
    </form>

    {{--  comnplaint phone code  --}}
    <div class="form_cphone">
        <span class="form_name_desc">
            COMPLAINT PHONE
        </span>

        <select name="form_name_select" class="form_name_select1">
            <option value="LGA">AGE</option>
        </select>
    </div>
</body>
</html>
