@php
    use App\Models\lga;
    use Illuminate\Support\Facades\Session;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/national/register.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</head>
<body>
    <!-- nav code -->
    
    <input type="checkbox" id="check_nav" style="display: none" checked>
    <nav>

        <label class="dashboard_nassp" for="check_nav">
            <img src="{{ URL('img/nassco_logo.png') }}" alt="Dashboard Icon" class="dashboard_nassp_icon">
            <span class="dashboard_nassp_desc" id="dashboard_nassp_desc">NASSP GRIEVANCE CENTER</span>
        </label>
        <ul class="ul_whole">
            <li>
                <a href="{{ route('national_homepage') }}">
                    <img src="{{ URL('img/dashboard_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">Dashboard</span>
                </a>
            </li>
            <li>
                <a  class="grieve_open" >
                    <img src="{{ URL('img/grieve_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">Grieviances</span>
                    {{--  <input type="checkbox" class="dashboard_grieve_checkbox" id="dashboard_grieve_checkbox">  --}}
                </a>
                <ul class="ul_whole1">
                    <li><a href="{{ route('national_reg') }}">Register</a></li>
                    <li><a href="{{ route('national_list') }}">Grieviance List</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('national_gro') }}">
                    <img src="{{ URL('img/gro_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">GRO Reports</span>
                </a>
            </li>
            <li>
                <a href="{{ route('national_reports') }}">
                    <img src="{{ URL('img/lgagro_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                    <span class="nav_item">LGA GROs</span>
                </a>
            </li>
        </ul>

        <span class="nav_logout">
            <label class="nav_logout_lab">
                <img src="{{ URL('img/logout_icon.png') }}" alt="Dashboard Icon" class="dashboard_icon">
                <span class="nav_item">Logout</span>
            </label>
        </span>
    </nav>

    
    <div class="main" id="main">
        <div class="header">
            <span class="header_line"></span>

            <span class="main_header_desc">
                <span class="main_header_desc1">
                    <img src="{{ URL('img/dropdown.png') }}" alt="dropdown image" class="main_header_desc1_icon" style="visibility: hidden;">
                    <label class="main_header_desc1_name">{{ $name }} {{ $lname_first }}.</label>
                    <label class="main_header_desc1_desc">{{ $title }}</label>
                </span>

                <img src="{{ URL('img/male.png') }}" alt="MAle Icon" class="main_header_desc1_desc_male_icon">

                <img src="{{ URL('img/notification.png') }}" alt="notification Icon" class="main_header_desc1_desc_not_icon">

                <img src="{{ URL('img/search1.png') }}" alt="search Icon" class="main_header_desc1_desc_search_icon" style="visibility: hidden;">
            </span>

            <label class="header_grieviance">Grieviances</label>

            <label class="header_location">
                <img src="{{ url('img/home.png') }}" >
                /Grieviancs/Register
            </label>
        </div>

        
        <div class="info">
            <form class="form" method="POST" action="{{ route('nationalRegister') }}">

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
                
                @csrf
                <span class="info_header">
                    GRIEVANCE REGISTRATION FORM
                </span>

                <span class="info_header_desc">
                    Kindly provide all necessary details before submitting
                </span>

                <span class="info_zone">
                    <label class="info_zone_desc">ZONE</label>

                    <input type="text" class="info_zone_input" name="info_zone" id="info_zone" placeholder="ZONE" >
                </span>

                <span class="info_state">
                    <label class="info_zone_desc">STATE</label>

                    <select name="info_state" id="info_state" class="info_state_input">
                        <option selected disabled>State</option>
                        <option value="fct">FCT</option>
                        <option value="abia">ABIA</option>
                        <option value="adamawa">ADAMAWA</option>
                        <option value="akwa-ibom">AKWA IBOM</option>
                        <option value="anambra">ANAMBRA</option>
                        <option value="bauchi">BAUCHI</option>
                        <option value="bayelsa">BAYELSA</option>
                        <option value="benue">BENUE</option>
                        <option value="borno">BORNO</option>
                        <option value="cross-river">CROSS RIVER</option>
                        <option value="delta">DELTA</option>
                        <option value="ebonyi">EBONYI</option>
                        <option value="edo">EDO</option>
                        <option value="ekiti ">EKITI </option>
                        <option value="enugu ">ENUGU </option>
                        <option value="gombe ">GOMBE </option>
                        <option value="imo ">IMO </option>
                        <option value="jigawa ">JIGAWA </option>
                        <option value="kaduna ">KADUNA </option>
                        <option value="kano ">KANO </option>
                        <option value="katsina ">KATSINA </option>
                        <option value="kebbi ">KEBBI </option>
                        <option value="kogi ">KOGI </option>
                        <option value="kwara ">KWARA </option>
                        <option value="lagos ">LAGOS </option>
                        <option value="nasarawa ">NASARAWA </option>
                        <option value="niger ">NIGER </option>
                        <option value="ogun ">OGUN </option>
                        <option value="ondo ">ONDO </option>
                        <option value="osun ">OSUN </option>
                        <option value="oyo ">OYO </option>
                        <option value="plateau ">PLATEAU </option>
                        <option value="rivers ">RIVERS </option>
                        <option value="sokoto ">SOKOTO </option>
                        <option value="taraba ">TARABA </option>
                        <option value="yobe ">YOBE </option>
                        <option value="zamfara ">ZAMFARA </option>
                    </select>

                    <span class="text-danger national_error">@error('info_state'){{ $message }} @enderror</span>
                </span>

                <span class="info_lga">
                    <label class="info_zone_desc">LGA</label>

                    <select name="info_lga" id="info_lga" class="info_state_input">
                        <option value="">LGA</option>
                    </select>

                    <span class="text-danger national_error">@error('info_lga'){{ $message }} @enderror</span>
                </span>

                <span class="info_ward">
                    <label class="info_zone_desc">WARD</label>

                    <select name="info_ward" id="info_ward" class="info_state_input">
                        <option value="">WARD</option>
                    </select>

                    <span class="text-danger national_error">@error('info_ward'){{ $message }} @enderror</span>
                </span>

                <span class="info_community">
                    <label class="info_zone_desc">COMMINITY</label>

                    <select name="info_community" id="info_community" class="info_state_input">
                        <option value="">COMMUNITY</option>
                        <option value="N/A">N/A</option>
                    </select>

                    <span class="text-danger national_error">@error('info_community'){{ $message }} @enderror</span>
                </span>

                <span class="info_beneficiary">
                    <label class="info_zone_desc">IS BENEFICIARY</label>

                    <select name="info_beneficiary" id="info_beneficiary" class="info_state_input" value="{{ old('info_beneficiary') }}">
                        <option selected disabled>ARE YOU A BENEFICIARY?</option>
                        <option value="yes">YES</option>
                        <option value="no">NO</option>
                    </select>

                    <span class="text-danger national_error">@error('info_beneficairy'){{ $message }} @enderror</span>
                </span>

                <span class="info_cname">
                    <label class="info_zone_desc">NAME</label>

                    <input type="text" class="info_zone_input" name="info_cname" placeholder="NAME" value="{{ old('info_cname') }}">

                    <span class="text-danger national_error">@error('info_cname'){{ $message }} @enderror</span>
                </span>

                <span class="info_cphone">
                    <label class="info_zone_desc">COMPLAINT PHONE</label>

                    <input type="text" class="info_zone_input" name="info_cphone" placeholder="PHONE NUMBER" value="{{ old('info_cphone') }}">

                    <span class="text-danger national_error">@error('info_cphone'){{ $message }} @enderror</span>
                </span>

                <span class="info_gender">
                    <label class="info_zone_desc">GENDER</label>

                    <select name="info_gender" id="" class="info_state_input">
                        <option selected disabled>GENDER</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                    </select>

                    <span class="text-danger national_error">@error('info_gender'){{ $message }} @enderror</span>
                </span>

                <span class="info_category">
                    <label class="info_zone_desc">CATEGORY</label>

                    <select name="info_category" id="info_category" class="info_state_input">
                        <option selected disabled>CATEGORY</option>
                        <option value="wrongful_inclusion_exclusion">WRONGFUL INCLUSION/EXCLUSION</option>
                        <option value="payments_and_payment_service_delivery">PAYMENTS AND PAYMENT SERVICE DELIVERY</option>
                        <option value="nassp_service_delivery_issues">NASSP SERVICE DELIVERY ISSUES</option>
                        <option value="fraud_and_corruption_issues">FRAUD AND CORRUPTION ISSUES</option>
                        <option value="data_errors_and_updates">DATA ERRORS AND UPDATES</option>
                        <option value="inquiries_and_information_requests">INQUIRIES AND INFORMATION REQUESTS</option>
                        <option value="other">OTHER</option>
                        <option value="abuse_and_social_issues">ABUSE AND SOCIAL ISSUES</option>
                    </select>

                    <span class="text-danger national_error">@error('info_category'){{ $message }} @enderror</span>
                </span>

                <span class="info_subcat">
                    <label class="info_zone_desc">AGE</label>

                    <input type="text" class="info_zone_input" name="info_age" placeholder="AGE">

                    <span class="text-danger national_error">@error('info_age'){{ $message }} @enderror</span>
                </span>

                <span class="info_cmode">
                    <label class="info_zone_desc">COMPLAINT MODE</label>

                    <select name="info_cmode" id="" class="info_state_input">
                        <option selected disabled>COMPLAINT MODE</option>
                        <option value="in_person">IN PERSON</option>
                        <option value="email">EMAIL</option>
                        <option value="phone">PHONE</option>
                        <option value="online">ONLINE</option>
                    </select>

                    <span class="text-danger national_error">@error('info_cmode'){{ $message }} @enderror</span>
                </span>

                <span class="info_cemail">
                    <label class="info_zone_desc">COMPLAINT EMAIL</label>

                    <input type="text" class="info_zone_input" name="info_cemail" placeholder="EMAIL ADDRESS(NOT COMPULSORY)" value="{{ old('info_cemail') }}">

                    <span class="text-danger national_error">@error('info_cemail'){{ $message }} @enderror</span>
                </span>

                <span class="info_resolved">
                    <label class="info_zone_desc">RESOLVED</label>

                    <select name="info_resolved" id="info_resolved" id="" class="info_state_input">
                        <option selected disabled>Has the problem been resolved</option>    
                        <option value="yes">YES</option>
                        <option value="no">NO</option>
                    </select>

                    <span class="text-danger national_error">@error('info_resolved'){{ $message }} @enderror</span>
                </span>

                <span class="info_escalate" id="info_escalate" style="display: none">
                    <label class="info_zone_desc">ESCALATE</label>

                    <select name="info_escalate"  class="info_state_input">
                        <option selected disabled>ESCALATE TO</option>
                        <option value="national_grm_manager">NATIONAL GRM MANAGER</option>
                        <option value="state_grm_manager">STATE GRM MANAGER</option>
                        <option value="local_grm_manager">LOCAL GOVERMENT GRM MANAGER</option>
                    </select>

                    <span class="text-danger national_error">@error('info_escalate'){{ $message }} @enderror</span>
                </span>

                <span class="info_referal" id="info_referal" style="display: none">
                    <label class="info_zone_desc">REFERAL</label>

                    <select name="info_referal"  class="info_state_input">
                        <option selected disabled>REFER TO</option>
                        <option value="gender_officer">Gender officer</option>
                    </select>

                    <span class="text-danger national_error">@error('info_referal'){{ $message }} @enderror</span>
                </span>

                <span class="info_age">
                    <label class="info_zone_desc">SUB CATEGORY</label>

                    <select name="info_subcat" id="info_subcat" class="info_state_input">
                        <option selected disabled>SUB CATEGORY</option>
                    </select>

                    <span class="text-danger national_error">@error('info_subcat'){{ $message }} @enderror</span>
                </span>

                <span class="info_rescomment" id="info_rescomment" style="display:none">
                    <label class="info_zone_desc">RESOLVED COMMENT</label>
    
                    <textarea name="info_rescomment" id="" cols="30" rows="10" class="info_rescomment_input" value="{{ old('info_rescomment') }}" placeholder="HOW WAS THE GRIEVIANCE RESOLVED"></textarea>

                    <span class="text-danger national_error1">@error('info_rescomment'){{ $message }} @enderror</span>
                </span>

                <span class="info_desc">
                    <label class="info_zone_desc">DESCRIPTION</label>
    
                    <textarea name="info_desc" id="" cols="30" rows="10" class="info_rescomment_input" value="{{ old('info_desc') }}" placeholder="Complaint's grieviance in a concise form"></textarea>

                    <span class="text-danger national_error1">@error('info_desc'){{ $message }} @enderror</span>
                </span>

                <span class="info_nsr" id="info_nsr" style="visibility: hidden">
                    <label class="info_zone_desc">NSR NUMBER</label>

                    <input type="text" class="info_zone_input" name="info_nsr" placeholder="NSR NUMBER" value="{{ old('info_nsr') }}">

                    <span class="text-danger national_error">@error('info_nsr'){{ $message }} @enderror</span>
                </span>

                <span class="button">
                    <button class="button_submit" type="submit">
                        SUBMIT
                    </button>

                    <button class="button_clear" type="none" onclick="clear()">
                        CLEAR
                    </button>
                </span>
            </form>
        </div>
        
        
    </div>
    

    <!-- end of nav code -->
</body>

<script type="text/javascript">

    function clear(){
        document.getElementById('info_zone').reset();
        document.getElementById('info_state').reset();
        document.getElementById('info_lga').reset();
        document.getElementById('info_ward').reset();
        document.getElementById('info_community').reset();
        document.getElementById('info_beneficiary').reset();
        document.getElementById('info_cname').reset();
        document.getElementById('info_cphone').reset();
        document.getElementById('info_gender').reset();
        document.getElementById('info_category').reset();
        document.getElementById('info_subcat').reset();
        document.getElementById('info_cmode').reset();
        document.getElementById('info_cemail').reset();
        document.getElementById('info_resolved').reset();
        document.getElementById('info_escalate').reset();
        document.getElementById('info_zone').reset();
        document.getElementById('info_zone').reset();
    }

        $(document).ready(function () {
            $('#info_state').on('change', function () {
                var stateid = this.value;
                //alert("sdsdsdsd" + stateid);
                $('#info_lga').html('');
                // $('#form_name_select').html('');
                $.ajax({
                    url: '{{ route('getLgas') }}?stateid='+stateid,
                    type: 'get',
                    success: function (res) {
                        if(res)
                        {
                            $('#info_lga').html('<option selected disabled>LGA</option>');
                            $.each(res, function (key, value) {
                                $('#info_lga').append('<option value="' + value
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
                                $('#info_zone').val(value.zone1);

                            });
                            //alert('xdsdsdsd00');
                        }
                    }
                });
            });

            //nsr code
            $('#info_beneficiary').on('change', function() {
                //alert("sdsdsd");
                var beneficiary = this.value;
                const nsr = document.getElementById('info_nsr');

                if(beneficiary == 'yes')
                {
                    nsr.style.visibility ='visible';
                }
                else if(beneficiary == 'no'){
                    nsr.style.visibility ='hidden';
                }
            });

            //resolved code
            $('#info_resolved').on('change', function() {
                var resolved = this.value;
                //alert("sdsds" + resolved);

                const resolved_comment = document.getElementById('info_rescomment');

                const escalate = document.getElementById('info_escalate');

                const referal = document.getElementById('info_referal');

                // resolved_comment = document.getElementById("sdf");

                if(resolved == 'yes')
                {
                    resolved_comment.style.display = 'block';
                    escalate.style.display = 'none';
                    referal.style.display = 'none';
                }
                else if(resolved == 'no'){
                    resolved_comment.style.display = 'none';
                    escalate.style.display = 'block';
                    referal.style.display = 'block';

                }
            });

            //wards code
            $('#info_lga').on('change', function() {
                var lga = this.value;
                //alert("hsdsd" + lga);
                $('#info_ward').html('');
                $.ajax({
                    url: '{{ route('getwards') }}?lga='+lga,
                    type: 'get',
                    success: function (res) {
                        if(res){
                        $('#info_ward').html('<option selected disabled>WARD</option>');
                        $.each(res, function (key, value){
                            $('#info_ward').append('<option value="' + value.ward + '">' + value.wardn +'</option>');
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
             $('#info_ward').on('change', function() {
                var ward = this.value;
                // alert("hsdsd" + ward);
                $('#info_community').html('');
                $.ajax({
                    url: '{{ route('getcomms') }}?ward='+ward,
                    type: 'get',
                    success: function (res) {
                        //alert("workingf");
                        if(res){
                            $('#info_community').html('<option selected disabled>COMMUNITY</option>');
                            $.each(res, function (key, value){
                                $('#info_community').append('<option value="' + value.community + '">' + value.communityn +'</option>');
                            });
                            }
                            else{
                                alert("not working");
                            }
                    }

                });
             });
            //end of community code

            //grieviance category switch code
            $('#info_category').on('change', function() {
                var category = this.value;
                //alert("i am a good developer")
                $('#info_subcat').html('');
                $.ajax({
                    url: '{{ route('getCategory') }}?category='+category,
                    type: 'get',
                    success: function(res) {
                        if(res)
                        {
                            $('#info_subcat').html('<option selected disabled>SUB CATEGORY</option>');
                            $.each(res,function (key, value) {
                                $('#info_subcat').append('<option value="' + value.sub_category + '">' + value.sub_categoryn +'</option>'); 
                            });
                        }
                        else{
                            //alert("not working");
                        }
                    }
                });
            });
            //end of grieviance category switch mode
        });

    </script>

<script src="{{ URL('js/swiper-bundle.min.js') }}"></script>

<script src="{{ URL('js/national/home.js') }}"></script>
</html>