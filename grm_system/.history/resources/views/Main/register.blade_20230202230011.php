@php
    use App\Models\lga;
    use Illuminate\Support\Facades\Session;
@endphp


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

    <div class="container copyright">
        <img src="{{ URL('img/copyright.png') }}" alt="copyright Logo" class="copyright_logo">

        <label class="copyright_desc">
            Copyright 2022. All Rights Reserved
        </label>
    </div>

    {{--  changing code  --}}
    <script type="text/javascript">

        $(document).ready(function () {
            $('#state_select').on('change', function () {
                var stateid = this.value;
                //alert("sdsdsdsd" + stateid);
                $('#lga_select').html('');
                $('#form_name_select').html('');
                $.ajax({
                    url: '{{ route('getLgas') }}?stateid='+stateid,
                    type: 'get',
                    success: function (res) {
                        if(res)
                        {
                            $('#lga_select').html('<option selected disabled>LGA</option>');
                            $.each(res, function (key, value) {
                                $('#lga_select').append('<option value="' + value
                                .lga + '">' + value.lgan + '</option>');
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
        });

    </script>

    <script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL('js/welcome/register.js') }}"></script>

</body>
</html>
