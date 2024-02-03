{{--  @ph
    use App\Models\lga;
    use Illuminate\Support\Facades\Session;
@endphp  --}}


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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css?v=').time()}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                <a href="{{ route('login') }}">
                    Staff/Admin Login
                    {{--  <img src="{{ URL('img/person.png') }}" alt="Person Image" class="header_personlogo">  --}}
                </a>

            </li>
        </ul>
    </div>

    <div class="header2"></div>

    //check grieviqance form
    <form method="post" style="visibility:hidden" class="check_grieve"
    id="check_grieve" action="{{ route('check_grieve') }}">
            @csrf
            <span class="check_grieve_bg"></span>
            <span class="info_share_box_main">
                <label for="" class="info_share_box_main_header">
                    Check Grieviances
                </label>

                <img src="{{ URL('img/close.png') }}" alt="close" class="info_share_box_main_header_close" id="info_share_box_close">

                <label for="" class="info_share_box_main_header1">
                    Input Grm Ref No.
                </label>

                <input type="text" name="info_share" id="" class="info_share_box_main_text">

                <button class="info_share_box_button">Check</button>
            </span>
    </form>

    <form class="form" id="form" method= "POST" action="{{ route('homeRegister') }}">
        {{--
        @if(Session::get('success'))
            <script>
                alert("{{ Session::get('success') }}");
            </script>
        @endif  --}}

        @if(Session::get('fail'))
            <script>
                alert("{{ Session::get('fail') }}");
            </script>
        @endif

        {{--  <img src="{{ URL('img/nassco_logo.png') }}" alt="Nassp Background Logo" class="form_wblogo">  --}}
        @csrf
        <div class="form_header">
          <label class="form_header_lab">GRIEVIANCE REGISTRATION FORM</label> 
          <span class="form_header_button" id="form_header_button">Check Grieviance</span> 
        </div>

        <div class="form_header2">
            Kindly provide all neccesary complaints before submitting
        </div>

        {{--  state code  --}}
        <div class="form_name">
            <span class="form_name_desc">
                STATE
            </span>

            <select name="state_select" class="form_name_select"  id="state_select" value="{{ old('state_select') }}">
                <option selected disabled>State</option>
                <option value="fct" {{ old('state_select') == "fct" ? 'selected' : '' }}>ABUJA</option>
                <option value="abia" {{ old('state_select') == "abia" ? 'selected' : '' }}>ABIA</option>
                <option value="adamawa" {{ old('state_select') == "adamawa" ? 'selected' : '' }}>ADAMAWA</option>
                <option value="akwa-ibom" {{ old('state_select') == "akwa-ibom" ? 'selected' : '' }}>AKWA IBOM</option>
                <option value="anambra" {{ old('state_select') == "anambra" ? 'selected' : '' }}>ANAMBRA</option>
                <option value="bauchi" {{ old('state_select') == "bauchi" ? 'selected' : '' }}>BAUCHI</option>
                <option value="bayelsa" {{ old('state_select') == "bayelsa" ? 'selected' : '' }}>BAYELSA</option>
                <option value="benue" {{ old('state_select') == "benue" ? 'selected' : '' }}>BENUE</option>
                <option value="borno" {{ old('state_select') == "borno" ? 'selected' : '' }}>BORNO</option>
                <option value="cross-river" {{ old('state_select') == "cross-river" ? 'selected' : '' }}>CROSS RIVER</option>
                <option value="delta" {{ old('state_select') == "delta" ? 'selected' : '' }}>DELTA</option>
                <option value="ebonyi" {{ old('state_select') == "ebonyi" ? 'selected' : '' }}>EBONYI</option>
                <option value="edo" {{ old('state_select') == "edo" ? 'selected' : '' }}>EDO</option>
                <option value="ekiti" {{ old('state_select') == "ekiti" ? 'selected' : '' }}>EKITI </option>
                <option value="enugu" {{ old('state_select') == "enugu" ? 'selected' : '' }}>ENUGU </option>
                <option value="gombe" {{ old('state_select') == "gombe" ? 'selected' : '' }}>GOMBE </option>
                <option value="imo" {{ old('state_select') == "imo" ? 'selected' : '' }}>IMO </option>
                <option value="jigawa" {{ old('state_select') == "jigawa" ? 'selected' : '' }}>JIGAWA </option>
                <option value="kaduna" {{ old('state_select') == "kaduna" ? 'selected' : '' }}>KADUNA </option>
                <option value="kano" {{ old('state_select') == "kano" ? 'selected' : '' }}>KANO </option>
                <option value="katsina" {{ old('state_select') == "katsina" ? 'selected' : '' }}>KATSINA </option>
                <option value="kebbi" {{ old('state_select') == "kebbi" ? 'selected' : '' }}>KEBBI </option>
                <option value="kogi" {{ old('state_select') == "kogi" ? 'selected' : '' }}>KOGI </option>
                <option value="kwara" {{ old('state_select') == "kwara" ? 'selected' : '' }}>KWARA </option>
                <option value="lagos" {{ old('state_select') == "lagos" ? 'selected' : '' }}>LAGOS </option>
                <option value="nasarawa" {{ old('state_select') == "nassarawa" ? 'selected' : '' }}>NASARAWA </option>
                <option value="niger" {{ old('state_select') == "niger" ? 'selected' : '' }}>NIGER </option>
                <option value="ogun" {{ old('state_select') == "ogun" ? 'selected' : '' }}>OGUN </option>
                <option value="ondo" {{ old('state_select') == "ondo" ? 'selected' : '' }}>ONDO </option>
                <option value="osun" {{ old('state_select') == "osun" ? 'selected' : '' }}>OSUN </option>
                <option value="oyo" {{ old('state_select') == "oyo" ? 'selected' : '' }}>OYO </option>
                <option value="plateau" {{ old('state_select') == "plateau" ? 'selected' : '' }}>PLATEAU </option>
                <option value="rivers" {{ old('state_select') == "rivers" ? 'selected' : '' }}>RIVERS </option>
                <option value="sokoto"{{ old('state_select') == "sokoto" ? 'selected' : '' }}>SOKOTO </option>
                <option value="taraba" {{ old('state_select') == "taraba" ? 'selected' : '' }}>TARABA </option>
                <option value="yobe" {{ old('state_select') == "yobe" ? 'selected' : '' }}>YOBE </option>
                <option value="zamfara" {{ old('state_select') == "zamfara" ? 'selected' : '' }}>ZAMFARA </option>

            </select>
            <span class="text-danger age">@error('state_select'){{ $message }} @enderror</span>
        </div>



        <div class="form_lga">
            <span class="form_name_desc">
                LGA
            </span>

            <select name="lga_select" class="form_name_select" id="lga_select">
                <option selected disabled>LGA</option>
            </select>

            <span class="text-danger age">@error('lga_select'){{ $message }} @enderror</span>
        </div>

        <div class="form_zone">
            <span class="form_name_desc">
                ZONE
            </span>

            <input type="text" name="zone" class="form_name_select" id="form_name_select" value="ZONE">

            {{--  <span class="text-danger age">@error('zone'){{ $message }} @enderror</span>  --}}
        </div>

        <div class="form_ward">
            <span class="form_name_desc">
                WARD
            </span>

            <select name="ward" class="form_name_select" id="get_wards">
                <option selected disabled>WARD</option>
            </select>

            <span class="text-danger age">@error('ward'){{ $message }} @enderror</span>
        </div>

        <div class="form_community">
            <span class="form_name_desc">
                COMMUNITY
            </span>

            <select name="community" class="form_name_select" id="comm">
                <option selected disabled>COMMUNITY</option>
            </select>

            <span class="text-danger age">@error('community'){{ $message }} @enderror</span>
        </div>

        {{--  beneficiary code  --}}
        <div class="form_ben">
            <span class="form_name_desc">
                IS BENEFICIARY
            </span>

            
            <select name="beneficiary" id="ben" class="form_name_select">
                
                <option selected disabled>Are you a Beneficiary?</option>
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
           

            <span class="text-danger age">@error('beneficiary'){{ $message }} @enderror</span>
        </div>

        <div  id="form_nsr"  class="form_nsr" >
            <span class="form_name_desc">
                NSR NUMBER
            </span>

            <input type="text" class="form_name_select1" name="nsr_no" id="nsr_no" placeholder="NSR NUMBER" value="{{ old('nsr_no') }}">

            <span class="text-danger age">@error('nsr_no'){{ $message }} @enderror</span>
        </div>
        
        <span class="{{ Session::get('nsr_drop') }}" id="nsr_drop">
        {{--  complaint name code --}}
        <div class="form_cname">
            <span class="form_name_desc">
                COMPLAINT NAME
            </span>

            <input type="text" class="form_name_select1" name="name" placeholder="NAME" value="{{ old('name') }}">

            <span class="text-danger age">@error('name'){{ $message }} @enderror</span>
        </div>

        <div class="form_gender">
            <span class="form_name_desc">
                GENDER
            </span>

            <select name="gender" class="form_name_select">
                <option selected disabled>GENDER</option>
                <option value="male" {{ old('gender') == "male" ? 'selected' : '' }}>MALE</option>
                <option value="female" {{ old('gender') == "female" ? 'selected' : '' }}>FEMALE</option>
            </select>

            <span class="text-danger age">@error('gender'){{ $message }} @enderror</span>
        </div>

        <div class="form_age">
            <span class="form_name_desc">
                AGE
            </span>

            <input type="text" name="age" class="form_name_select" placeholder="AGE" value="{{ old('age') }}">

            <span class="text-danger age">@error('age'){{ $message }} @enderror</span>
        </div>

        <div class="form_cphone">
            <span class="form_name_desc">
                COMPLAINT PHONE
            </span>

            <input type="text" name="phone" class="form_name_select1" placeholder="COMPLAINT PHONE" value="{{ old('phone') }}">

            <span class="text-danger age">@error('phone'){{ $message }} @enderror</span>
        </div>

        <div class="form_cemail">
            <span class="form_name_desc">
                COMPLAINT EMAIL
            </span>

            <input type="text" name="email" class="form_name_select1" placeholder="COMPLAINT EMAIL (NOT COMPULSORY)" value="{{ old('email') }}">

            <span class="text-danger age">@error('email'){{ $message }} @enderror</span>
        </div>

        <div class="form_desc">
            <span class="form_name_desc">
                DESCRIPTION
            </span>

            <textarea name="description" class="form_name_select2" placeholder="DESCRIPTION" value="{{ old('description') }}"></textarea>

            <span class="text-danger age1">@error('description'){{ $message }} @enderror</span>
        </div>

        <div class="form_btn">
            <button class="form_btn1" type="submit">
                SUBMIT
            </button>

            <button class="form_btn2">
                CLEAR
            </button>
        </div>

        </span>
    </form>

    <footer id="footer" class="{{ Session::get('footer') }}">
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
    <div class="container {{ Session::get('copyright') }}" id="copyright">
        <img src="{{ URL('img/copyright.png') }}" alt="copyright Logo" class="copyright_logo">

        <label class="copyright_desc">
            Copyright 2022. All Rights Reserved
        </label>
    </div>



    @php
        $reg = Session::get('reg');
        if($reg ==1)
        {
    @endphp
    <div class="register_successful1">
    </div>
        <form class="register_successful" method="GET" action="{{ route('register_successful') }}">
            <div class="reg_pic_div">
                <img src="{{ URL('img/Form_submitted1.jpg') }}" alt="registered Picture" class="reg_pic">
                <span class="register_successful_btn">
                    <button class="register_successful_btn1" type="submit">OK</button>
                </span>
            </div>
        </form>
    @php
        }
        else {

        }
    @endphp

    {{--  @php

    @endphp
            <div></div>
    @php
        }
    @endphp  --}}

    {{--  changing code  --}}
    <script type="text/javascript">

        $(document).ready(function () {
            $('#state_select').on('change', function () {
                var stateid = this.value;
                //alert("sdsdsdsd" + stateid);
                //$('#lga_select').html('');
                //$('#form_name_select').html('');
                $.ajax({
                    url: '{{ route('getLgas') }}?stateid='+stateid,
                    type: 'get',
                    success: function (res) {
                        if(res)
                        {
                            $('#lga_select').html('<option selected disabled>LGA</option>');
                            $.each(res, function (key, value) {
                                $('#lga_select').append('<option value="' + value
                                .lga + '" >' + value.lgan + '</option>');
                            });
                        }
                        else{
                            alert("not working");
                        }
                    }
                });
                //changing zones
                $.ajax({
                    url: '{{ route('getzones') }}?stateid='+stateid,
                    type: 'get',
                    success: function(res1){
                        if(res1){

                            $.each(res1, function(key,value){
                                $('#form_name_select').val(value.zone1);

                            });
                            //alert('xdsdsdsd00');
                        }
                    }
                });
            });

            //wards code
            $('#lga_select').on('change', function() {
                var lga = this.value;
                //alert("hsdsd" + lga);
                $('get_wards').html('');
                $.ajax({
                    url: '{{ route('getwards') }}?lga='+lga,
                    type: 'get',
                    success: function (res) {
                        if(res){
                        $('#get_wards').html('<option selected disabled>WARD</option>');
                        $.each(res, function (key, value){
                            $('#get_wards').append('<option value="' + value.ward + '">' + value.wardn +'</option>');
                        });
                        }
                        else{
                            alert("not working");
                        }
                    }

                });
            });
            //end of ward code

             //community code
             $('#get_wards').on('change', function() {
                var ward = this.value;
                //alert("hsdsd" + lga);
                $('comm').html('');
                $.ajax({
                    url: '{{ route('getcomms') }}?ward='+ward,
                    type: 'get',
                    success: function (res) {
                        if(res){
                        $('#comm').html('<option selected disabled>COMMUNITY</option>');
                        $.each(res, function (key, value){
                            $('#comm').append('<option value="' + value.community + '">' + value.communityn +'</option>');
                        });
                        }
                        else{
                            alert("not working");
                        }
                    }

                });
            });
            //end of community code

            //show nsr number code
            $('#ben').on('change', function() {
                var ben = this.value;
                // alert("hsdsd" + ben);
                
                if(ben == "yes")
                {
                   document.getElementById("nsr_drop").style.top="50px";
                   document.getElementById("footer").style.top="1080px";
                   document.getElementById("copyright").style.top="1280px";
                   {{ Session::put('nsr_drop','nsr_drop1') }}
                   {{ Session::put('footer','footer1') }}
                   {{ Session::put('copyright','copyright1') }}
                }
                else{
                    document.getElementById("nsr_drop").style.top="0px";
                    document.getElementById("footer").style.top="1030px";
                    document.getElementById("copyright").style.top="1230px";
                }
            })
            //end of show nsr code
        });

    </script>

    <script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL('js/welcome/register.js') }}"></script>

</body>
</html>
