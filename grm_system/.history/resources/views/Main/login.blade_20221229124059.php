<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/main/login.css') }}">
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


    </div>

    <div class="section2">
        <div class="section2_login">
            <span class="section2_div1_welcome">
                Welcome back!
            </span>

            <span class="section2_div1_welcome_desc">
                Login to your account
            </span>

            <span class="section2_div1_email">
                <img src="{{ URL('img/email.png') }}" alt="background logo" class="section2_div1_email_icon">
                <input type="text" class="section2_div1_email_text" placeholder="Email Address">
            </span>

            <span class="section2_div1_password">
                <img src="{{ URL('img/padlock.png') }}" alt="background logo" class="section2_div1_email_icon" >
                <input type="password" class="section2_div1_email_text" placeholder="Password" id="id_password">
                <img src="{{ URL('img/hide.png') }}" onclick="myfunction()" alt="background logo" class="section2_div1_email_icon1" id="hide">
                <img src="{{ URL('img/show.png') }}" onclick="myfunction()" alt="background logo" class="section2_div1_email_icon1" id="show">
            </span>

            <span class="section2_div1_resetp">
                <label class="section2_div1_resetp_desc">Recover Password</label>
            </span>

            <span class="section2_div1_back">
                Go back to home page
            </span>
        </div>
    </div>
</body>

<script type="text/javascript">
    {{--  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});  --}}

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
