@php
    use Illuminate\Support\Facades\Session;
    use App\Models\user;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grieviance List</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/national/list.css') }}">
    <link rel="stylesheet" href="{{ URL('css/swiper-bundle.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
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
                <a href="{{ route('national_gro') }}">
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
                    <img src="{{ URL('img/dropdown.png') }}" alt="dropdown image" class="main_header_desc1_icon">
                    <label class="main_header_desc1_name">{{ $name }} {{ $lname_first }}.</label>
                    <label class="main_header_desc1_desc">GRM Manager</label>
                </span>

                <img src="{{ URL('img/male.png') }}" alt="MAle Icon" class="main_header_desc1_desc_male_icon">

                <img src="{{ URL('img/notification.png') }}" alt="notification Icon" class="main_header_desc1_desc_not_icon">

                <img src="{{ URL('img/search1.png') }}" alt="search Icon" class="main_header_desc1_desc_search_icon" style="display:none">
            </span>

            <label class="header_grieviance">Grieviances</label>

            <label class="header_location">
                <img src="{{ url('img/home.png') }}" >
                /Grieviancs
            </label>
        </div>

        <div class="main_summary">
                <span class="main_summary_recorded">
                    <label class="main_summary_recorded_header">
                        Total Grieviances Recorded
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $total_grieviance }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Total Grieviances
                    </label>

                    <img src="{{ URL('img/record.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_resolved">
                    <label class="main_summary_recorded_header">
                        Total Grieviances Resolved
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $resolved }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Resolved Cases
                    </label>

                    <img src="{{ URL('img/resolved.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_review">
                    <label class="main_summary_recorded_header">
                        Total Grieviances Under Review
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $review }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        Review Grieviances
                    </label>

                    <img src="{{ URL('img/review.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>

                <span class="main_summary_new">
                    <label class="main_summary_recorded_header">
                        New Grieviances
                    </label>

                    <label class="main_summary_recorded_number">
                        {{ $new }}
                    </label>

                    <label class="main_summary_recorded_desc">
                        New Cases
                    </label>

                    <img src="{{ URL('img/new.png') }}" alt="recorded icon" class="main_summary_recorded_img">
                </span>
            </div>

        <div class="info">
            <span class="info_header">
                <span class="info_header_bottom_line"></span>
                <label class="info_header_grieviance" id="info_header_grieviance">All Grieviances</label>

                <button class="info_share" id="info_share">
                    <img src="{{ url('img/share.png') }}" alt="filter_image">
                    Export
                </button>

                

                <button class="info_filter1" id="info_filter1">
                    <img src="{{ url('img/filter1.png') }}" alt="filter_image">
                    Filter
                </button>

                <button class="info_filter2" id="info_filter2">
                    <img src="{{ url('img/edit.png') }}" alt="filter_image">
                    Assigned To Me
                </button>

                <span class="info_header_search">
                    <img src="{{ url('img/search2.png') }}" class="info_share_img" alt="search_image">
                    <input type="text" class="info_header_Searchbox" id="info_header_Searchbox" placeholder="Search...">
                </span>
            </span>

            <table class="info_table" id="info_table"> 


                    <tr class="thead">
                        
                        <th class="info_table_header_text_edit">
                            
                        </th>
                        <th class="info_table_header_text">
                            GRM RefNo
                            {{--  <img src="{{ url('img/attach1.png') }}" alt="filter_image">  --}}
                        </th>
                        <th class="info_table_header_text">
                            Zone
                        </th>
                        <th class="info_table_header_text">
                            State
                        </th>
                        <th class="info_table_header_text">
                            LGA 
                        </th>
                        <th class="info_table_header_text">
                            Ward 
                        </th>
                        <th class="info_table_header_text">
                            Community
                        </th>  
                        <th class="info_table_header_text">
                            Name
                        </th>
                        <th class="info_table_header_text">
                            Phone
                        </th>
                        <th class="info_table_header_text">
                            Category
                        </th>
                        <th class="info_table_header_text">
                            Sub Category 
                        </th>
                        <th class="info_table_header_text">
                            Complain Mode
                        </th>
                        <th class="info_table_header_text">
                            Resolved
                        </th>
                        <th class="info_table_header_text">
                            Resolved Comment
                        </th>
                        <th class="info_table_header_text">
                            Assigned To
                        </th>
                        <th class="info_table_header_text">
                            Refered To
                        </th>
                        <th class="info_table_header_text">
                            NSR No
                        </th>
                        <th class="info_table_header_text">
                            Gender
                        </th>
                        <th class="info_table_header_text">
                            Email
                        </th>
                        <th class="info_table_header_text">
                            Description
                        </th>
                        {{--  <th class="info_table_header_text">
                            <img src="{{ url('img/left.png') }}" alt="filter_image" class="info_table_left">
                        </th>  --}}

                    </tr> 

                    @php
                        $grieviance_table = session::get('filter_search');
                    @endphp

                    @foreach ($grieviance_table as $key => $data)

                    <tr class="tbody" id="tbody">
                        <td class="info_table_header_text_edit" id="info_table_header_text_edit" value="{{ $data->track }}">
                            <form action="{{ route('edit') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $data->track }}" name="id" id="id">
                                <button type="submit" class="info_text_edit" id="info_text_edit" value="sdjsdsd">Edit</button>
                            </form>
                             
                        </td>
                        <td class="info_table_header_text1">{{ $data->track }}</td>
                        <td class="info_table_header_text1">{{ $data->zone }}</td> 
                        <td class="info_table_header_text1">{{ $data->state }}</td> 
                        <td class="info_table_header_text1">{{ $data->lga }}</td> 
                        <td class="info_table_header_text1">{{ $data->ward }}</td> 
                        <td class="info_table_header_text1">{{ $data->community }}</td> 
                        <td class="info_table_header_text1">{{ $data->name }}</td> 
                        <td class="info_table_header_text1">{{ $data->phone }}</td> 
                        <td class="info_table_header_text1">{{ $data->category }}</td> 
                        <td class="info_table_header_text1">{{ $data->sub_category }}</td> 
                        <td class="info_table_header_text1">{{ $data->cmode }}</td> 
                        <td class="info_table_header_text1">{{ $data->resolved }}</td>
                        <td class="info_table_header_text1">{{ $data->rescomment }}</td> 
                        @php
                            $name = user::where('user_id', '=', $data->assigned)->value('name1');
                        @endphp
                        <td class="info_table_header_text1">{{ $name}}</td> 
                        <td class="info_table_header_text1">{{ $data->referal}}</td> 
                        <td class="info_table_header_text1">{{ $data->nsr_no}}</td> 
                        <td class="info_table_header_text1">{{ $data->gender }}</td> 
                        <td class="info_table_header_text1">{{ $data->email }}</td> 
                        <td class="info_table_header_text1">{{ $data->desc }}</td> 
                        <td class="info_table_header_text1"></td> 
                    </tr>

                    {{--  <script>
                        $(document).ready(function () {
                            $('#info_table_header_text_edit').on('click', function() {
                            var track = this.value;
                            alert("sdsdsd" + track);
                            });
                        });  --}}
                    </script>
                    @endforeach

                
            </table>
        </div>
        
        <!-- code for export -->
        <form method="post" style="display:none" id="info_share_box" action="{{ route('list_download') }}">
            @csrf
            <span class="info_share_box_cover"></span>
            <span class="info_share_box_main">
                <label for="" class="info_share_box_main_header">
                    Export Grieviances
                </label>

                <img src="{{ URL('img/close.png') }}" alt="close" class="info_share_box_main_header_close" id="info_share_box_close">

                <label for="" class="info_share_box_main_header1">
                    Select Format 
                </label>

                <select name="info_share" id="" class="info_share_box_main_text">
                    <option selected disabled>File Format</option>
                    <option value="csv">CSV</option>
                    <option value="excel">EXCEL</option>
                </select>

                <button class="info_share_box_button">Export</button>
            </span>
        </form>
        <!-- end of code for export -->

        <!-- code for filter -->
        <form method="post" style="display:none" id="info_filter" action="{{ route('filter_grieviance') }}">
            @csrf
            <span class="info_filter_cover"></span>
            <span class="info_filter_main">
                <label for="" class="info_share_box_main_header">
                    Filter Grieviances
                </label>   
                
                <img src="{{ URL('img/close.png') }}" alt="close" class="info_share_box_main_header_close" id="info_filter_close">

                <span class="filter_zone">
                    <label class="filter_zone_title">ZONE</label>


                    {{--  <input type="text" value="" name="filter_zone_select" id="filter_zone" class="filter_zone_select" placeholder="ZONE">  --}}

                    <select name="filter_zone_select" id="filter_zone_select" class="filter_zone_select" >
                        <option selected disabled>SELECT ZONES</option>
                        <option value="NORTH-CENTRAL">NORTH-CENTRAL</option>
                        <option value="NORTH-WEST">NORTH-WEST</option>
                        <option value="NORTH-EAST">NORTH-EAST</option>
                        <option value="SOUTH-SOUTH">SOUTH-SOUTH</option>
                        <option value="SOUTH-EAST">SOUTH-EAST</option>
                        <option value="SOUTH-WEST">SOUTH-WEST</option>
                    </select>
                </span>

                <span class="filter_state">
                     <label class="filter_zone_title">STATE</label>

                    <select name="filter_state_select" class="filter_zone_select"  id="filter_state">
                        <option selected disabled>STATE</option>
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
                </span>

                <span class="filter_lga">
                    <label class="filter_zone_title">LGA</label>

                    <select name="filter_lga_select" id="filter_lga" class="filter_zone_select" >
                        <option selected disabled>LGA</option>
                    </select>
                </span>

                <span class="filter_ward">
                    <label class="filter_zone_title">WARD</label>

                    <select name="filter_ward_select" id="filter_ward"  class="filter_zone_select" value="{{ old('filter_ward_select') }}">
                        <option selected disabled>WARD</option>
                    </select>
                </span>

                <span class="filter_category">
                    <label class="filter_zone_title">GRIEVIANCE CATEGORY</label>


                    <select name="filter_category_select" class="filter_zone_select">
                        <option selected disabled>CATEGORY</option>
                        <option value="wrongful_inclusion_exclusion">WRONGFUL INCLUSION/EXCLUSION</option>
                        <option value="payments_and_payment_service_delivery">PAYMENTS AND PAYMENT SERVICE DELIVERY</option>
                        <option value="nassp_service_delivery_issues">NASSP SERVICE DELIVERY ISSUES</option>
                        <option value="fraud_and_corruption_issues">FRAUD AND CORRUPTION ISSUES</option>
                        <option value="data_errors_and_updates">DATA ERRORS AND UPDATES</option>
                        <option value="inquiries_and_information_requests">INQUIRIES AND INFORMATION REQUESTS</option>
                        <option value="abuse_and_social_issues">GENDER AND ORTHER SOCIAL ISSUES</option>
                        <option value="other">OTHER</option>
                    </select>
                </span>

                <span class="filter_mode">
                    <label class="filter_zone_title">COMPLAINT MODE</label>

                    <select name="filter_mode_select" class="filter_zone_select" value="{{ old('filter_ward_select') }}">
                        <option selected disabled>COMPLAINT MODE</option>
                        <option value="in_person">IN PERSON</option>
                        <option value="email">EMAIL</option>
                        <option value="phone">PHONE</option>
                        <option value="online">ONLINE</option>
                        <option value="online">SMS</option>
                        <option value="online">SOCIAL MEDIA</option>
                    </select>
                </span>

                <span class="filter_resolved">
                    <label class="filter_zone_title">Grieviance Status</label>

                    <select name="filter_resolved_select" class="filter_zone_select" value="{{ old('filter_zone_select') }}">
                        <option selected disabled>Has the problem been resolved</option> 
                        <option value="no">ALL</option>   
                        <option value="yes">RESOLVED</option>
                        <option value="no">NEW</option>
                        <option value="no">PENDING</option>
                    </select>  
                </span>

                <button class="filter_search" type="submit">
                    SEARCH
                </button>
            </span>
        </form>
        <!-- end of code for filter -->

        <!-- code for edit -->

        @php
            $show_edit = session::get('edit_show_id');

            $edit_id = session::get('edit_id');
        @endphp

        <form method="post" style="display:none;" id="info_edit" action="{{ route('edit_form') }}">
            @csrf
            <span class="info_filter_cover"></span>
            <span class="info_filter_main">
                <label for="" class="info_share_box_main_header">
                    Filter Grieviances
                </label>   
                
                <img src="{{ URL('img/close.png') }}" alt="close" class="info_share_box_main_header_close" id="info_edit_close">

                <span class="filter_zone">
                    <label class="filter_zone_title">ZONE</label>


                    <input type="text" value="" name="filter_zone_select" id="filter_zone" class="filter_zone_select" placeholder="{{ $edit_id }}">
                </span>

                <span class="filter_state">
                     <label class="filter_zone_title">STATE</label>

                </span>

                <span class="filter_lga">
                    <label class="filter_zone_title">LGA</label>

                    <select name="filter_lga_select" id="filter_lga" class="filter_zone_select" >
                        <option selected disabled>LGA</option>
                    </select>
                </span>

                <span class="filter_ward">
                    <label class="filter_zone_title">WARD</label>

                    <select name="filter_ward_select" id="filter_ward"  class="filter_zone_select" value="{{ old('filter_ward_select') }}">
                        <option selected disabled>WARD</option>
                    </select>
                </span>

                <span class="filter_category">
                    <label class="filter_zone_title">GRIEVIANCE CATEGORY</label>


                    <select name="filter_category_select" class="filter_zone_select">
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
                </span>

                <span class="filter_mode">
                    <label class="filter_zone_title">COMPLAINT MODE</label>

                    <select name="filter_mode_select" class="filter_zone_select" value="{{ old('filter_ward_select') }}">
                        <option selected disabled>COMPLAINT MODE</option>
                        <option value="in_person">IN PERSON</option>
                        <option value="email">EMAIL</option>
                        <option value="phone">PHONE</option>
                        <option value="online">ONLINE</option>
                    </select>
                </span>

                <span class="filter_resolved">
                    <label class="filter_zone_title">RESOLVED GRIEVIANCES</label>

                    <select name="filter_resolved_select" class="filter_zone_select" value="{{ old('filter_zone_select') }}">
                        <option selected disabled>Has the problem been resolved</option>    
                        <option value="yes">RESOLVED</option>
                        <option value="no">UNRESOLVED</option>
                    </select>  
                </span>

                <button class="filter_search" type="submit">
                    SEARCH
                </button>
            </span>
        </form>

        <!-- end of code for edit -->
        
    </div>
    
</body>



<script src="{{ URL('js/national/list.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#filter_state').on('change', function (){
            //alert('sdsdsd');
            var stateid = this.value;
            $('#filter_lga').html('');
            $.ajax({
                url: '{{ route('getLgas') }}?stateid='+stateid,
                type: 'get',
                success: function (res) {
                        if(res)
                        {
                            $('#filter_lga').html('<option selected disabled>LGA</option>');
                            $.each(res, function (key, value) {
                                $('#filter_lga').append('<option value="' + value
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
                                $('#filter_zone').val(value.zone1);

                            });
                            //alert('xdsdsdsd00');
                        }
                    }
                });
        });

        $('#filter_lga').on('change', function() {
            //alert('lga');
            var lga = this.value;
            $('#filter_ward').html('');
            $.ajax({
                    url: '{{ route('getwards') }}?lga='+lga,
                    type: 'get',
                    success: function (res) {
                    if(res){
                    $('#filter_ward').html('<option selected disabled>WARD</option>');
                    $.each(res, function (key, value){
                        $('#filter_ward').append('<option value="' + value.ward + '">' + value.wardn +'</option>');
                    });
                    }
                    else{
                        alert("not working");
                    }
                }

            });
        });

        $('#info_header_grieviance').on('click', function() {
            //alert("sdsdsd");
            window.location.href = "{{ route('all_grieviances') }}";
        });

        $('#info_header_Searchbox').keyup(function() {
            var search_input = this.value;

            document.cookie = "search_input = "  + search_input;

            //alert(search_input);

            if(search_input != "")
            {
                //alert("sasas");
                $.ajax({
                    url: "{{ route('search_bar') }}",
                    type: 'get',
                    //data: {search_input:search_input},
                    success: function (res) {
                        if(res)
                        {
                            //alert('sdsd');
                            //window.location.reload('#info_table');
                            $('#info_table').load(' #info_table');
                        }
                    }
                });
            }
            else{
                //alert("empty");
                $.ajax({
                    url: "{{ route('all_grieviances') }}"
                });
            }
        });

        $('#info_filter2').on('click', function() {
            //alert("sdsdsd");
            window.location.href = "{{ route('personal') }}";
        });

        //edit code
        $('.info_text_edit').click( function() {
            //var track = this.value;
            //var val = document.getElementById("id").value;
            //alert("sdsdsd");
            //sessionStorage.setItem('edit_show_id', 'show');
           //@php
                //session::put('edit_show_id', 'show'); 
           // @endphp
           grieve_mode0 = document.getElementById("info_edit");
            grieve_mode0.style.display = "show";
            
        });

        $('#info_edit_close').click( function() { 
            //alert("sdsdsd");
            //sessionStorage.setItem('edit_show_id', 'none');
            //@php
                //session::put('edit_show_id', 'none'); 
            //@endphp

            window.location.href = "{{ route('edit_form') }}";

            grieve_mode0 = document.getElementById("info_edit");
            grieve_mode0.style.visibility = "hidden";
        });


        //const close_edit_button = document.getElementById("info_edit_close");

        //close_edit_button.addEventListener("click", (event) => {
        //alert("God is great");
        //sessionStorage.setItem('edit_show_id', 'none');
        //var a = sessionStorage.getItem("edit_show_id");
        //alert("sheddy " + a);
        //});
    });


        

    
</script>

</html>