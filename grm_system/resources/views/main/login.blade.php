<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/main/login.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
</head>
<body>
    <div class="section1">
        <img src="{{ URL('img/login_image.png') }}" alt="background logo" class="section1_bg">
        <div class="section1_div1">
            <img src="{{ URL('img/nassco_logo.png') }}" alt="nassp logo" class="section1_div1_nasspl">

            <div class="section1_div1_desc">
                NASSP <br>
                GRIEVANCE <br>
                CENTER
            </div>

            <span class="section1_div1_wbl_sep"></span>

            <img src="{{ URL('img/wb_logo.png') }}" alt="nassp logo" class="section1_div1_wbl">
        </div>

        <div class="section1_div2">
            WELCOME!
        </div>
    </div>

    <div class="section2">
        <form class="section2_login" method="post" action="{{ route('check') }}">

            @if(Session::get('fail'))
                        <script>alert('{{ Session::get('fail') }}')</script>
            @endif

            @csrf
            <span class="section2_div1_welcome">
                Welcome back!
            </span>

            <span class="section2_div1_welcome_desc">
                Login to your account
            </span>

            <span class="section2_div1_email">
                <img src="{{ URL('img/email.png') }}" alt="background logo" class="section2_div1_email_icon">
                <input value="{{ old('email') }}" type="text" class="section2_div1_email_text" placeholder="Email Address" name="email">
                <span class="section2_div1_email_error" >@error('email' ) {{ $message }} @enderror</span>
            </span>

            <span class="section2_div1_password">
                <img src="{{ URL('img/padlock.png') }}" alt="background logo" class="section2_div1_email_icon" >
                <input type="password"  class="section2_div1_email_text" placeholder="Password" id="id_password" name="password">
                <img src="{{ URL('img/hide.png') }}" onclick="myfunction()" alt="background logo" class="section2_div1_email_icon1" id="hide" style="display:none;">
                <img src="{{ URL('img/show.png') }}" onclick="myfunction()" alt="background logo" class="section2_div1_email_icon1" id="show">
                <span class="section2_div1_email_error1">@error('password' ) {{ $message }} @enderror</span>
            </span>

            <span class="section2_div1_resetp">
                <a class="section2_div1_resetp_desc" href="#">Recover Password</a>
            </span>

            <span class="section2_div1_back">
                <a class="section2_div1_back_desc" href="{{  route('home') }}">Go back to home page</a>
            </span>

            <span class="section2_div1_button">
                <button type ="submit" class="section2_div1_button1" onclick="barchange()">LOGIN</button>
            </span>
        </form>
    </div>
</body>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script type="text/javascript">
    function barchange(){
        document.cookie = "bar_change = STATE";
    }


    function myfunction(){
        
        var x = document.getElementById("id_password");
        if (x.type === "password")
        {
            x.type= "text";
            document.getElementById('hide').style.display = "inline-block";
            document.getElementById('show').style.display = "none";
        }
        else{
            x.type= "password";
            document.getElementById('show').style.display = "inline-block";
            document.getElementById('hide').style.display = "none";
        }
    }
</script>
</html>
