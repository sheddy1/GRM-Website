@php
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Cookie;
    use App\Models\user;
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRO</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/national/gro.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    @extends('national.nav ')
    @section('nav')
    @endsection

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

            <label class="header_grieviance">State/LGA GROs</label>

            <label class="header_location">
                <img src="{{ url('img/home.png') }}" >
                /State/LGA GROs
            </label>
        </div>

        <div class="main_gro">
            <span class="main_gro_header">
                <label class="main_gro_header1">
                    State/LGA GROs
                </label>

                <button class="main_gro_header_add" id="main_gro_header_add">
                    <img src="{{ URL('img/add.png') }}" alt="add" class="main_gro_header_add_image">
                        Add
                </button>

                <button class="main_gro_header_filter"  id="main_gro_header_filter">
                    <img src="{{ URL('img/filter2.png') }}" alt="add" class="main_gro_header_add_image">
                        Filter
                </button>

                <input type="text" name="main_header_search" class="main_header_search" id="main_header_search" placeholder="Search...">
            </span>

            <div class="main_gro_table1" id="main_gro_table1">
                <table class="main_gro_table">
                @php
                    $gro_table = User::get()->count();

                    $total = $gro_table / 2;

                    $total1 = $gro_table % 2;

                    $total2 = (int)$total;

                    $total3 = $total1 + $total2;
                @endphp
                    <tr class="main_gro_table_tr">
                        <td >
                            <tb class="main_gro_table_img"><img src="{{ URL('img/male.png') }}" alt=""></tb>
                            <tb>
                                <td class="main_gro_table_details" style="border-left: 1px solid #8D8D8D;">
                                    for($i=$total3; $i<=$gro_table;$i++)
                                    {
                                        $name = user::where('id', $i)->value('fname');

                                        echo $name;
                                    }

                                    class="main_gro_table_details_edit" >
                                        <img src="{{ URL('img/edit.png') }}" alt="">
                                        Edit
                                    </label>
                                </td>
                            </tb>
                        </td>


                        <td>
                            <tb class="main_gro_table_img"><img src="{{ URL('img/male.png') }}" alt=""></tb>
                            <tb >
                                <td class="main_gro_table_details" style="border-left: 1px solid #8D8D8D;">

                                    <label class="main_gro_table_details_edit" >
                                        <img src="{{ URL('img/edit.png') }}" alt="">
                                        Edit
                                    </label>
                                </td>
                            </tb>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- add pop up -->
            <div class="main_gro_add" class="main_gro_add" id="main_gro_add"
             style="visibility: hidden">
                <span class="main_gro_add_bg"></span>

                <span class="main_gro_add_main">
                    <span class="main_gro_add_main_header">
                        <label class="main_gro_add_main_header_lab">
                            Add GRM Officers
                        </label>

                        <img src="{{ URL('img/close.png') }}" alt="close"
                        class="main_gro_add_main_header_img" id="main_gro_add_main_header_img">
                    </span>
                </span>

                <form action="{{ route('gro_add') }}"
                method="POST" class="main_gro_add_form">
                    @csrf
                    <span class="main_gro_add_form_line1">
                        <span class="main_gro_add_form_line1_box1">
                            <label class="main_gro_add_form_line1_box1_head">
                                First Name
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <input type="text" name="fname" class="main_gro_add_form_line1_box1_input"
                             placeholder ="First Name of the GRM officer">

                             <span class="main_gro_error">@error('fname'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box2">
                            <label class="main_gro_add_form_line1_box1_head">
                                Middle Name
                            </label>

                            <input type="text" name="mname" class="main_gro_add_form_line1_box1_input"
                             placeholder ="Middle Name of the GRM officer">
                             <span class="main_gro_error">@error('mname'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box3">
                            <label class="main_gro_add_form_line1_box1_head">
                                Last Name
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <input type="text" name="lname" class="main_gro_add_form_line1_box1_input"
                             placeholder ="Last Name of the GRM officer">
                             <span class="main_gro_error">@error('lname'){{ $message }} @enderror</span>
                        </span>
                    </span>

                    <span class="main_gro_add_form_line2">
                        <span class="main_gro_add_form_line1_box1">
                            <label class="main_gro_add_form_line1_box1_head">
                                Email Address
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <input type="text" name="email" class="main_gro_add_form_line1_box1_input"
                             placeholder ="Email of the GRM officer">
                             <span class="main_gro_error">@error('email'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box2">
                            <label class="main_gro_add_form_line1_box1_head">
                                State
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                        <select name="state" id="main_gro_state"
                        class="main_gro_add_form_line1_box1_input">
                            <option selected disabled>State of the GRM Officer</option>
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
                        <span class="main_gro_error">@error('state'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box3">
                            <label class="main_gro_add_form_line1_box1_head">
                                LGA
                            </label>

                        <select name="lga" id="main_gro_lga" class="main_gro_add_form_line1_box1_input">
                            <option selected disabled>LGA of of the GRM Officer</option>
                        </select>
                        <span class="main_gro_error">@error('lga'){{ $message }} @enderror</span>
                        </span>
                    </span>

                    <span class="main_gro_add_form_line3">
                    <span class="main_gro_add_form_line1_box1">
                            <label class="main_gro_add_form_line1_box1_head">
                                Designation
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <select name="designation" class="main_gro_add_form_line1_box1_input">
                                <option selected disabled>Designation</option>
                                <option value="National Grm">National Grm Officer</option>
                                <option value="State Grm">State Grm Officer</option>
                                <option value="LGA Grm">LGA Grm Officer</option>
                            </select>

                            <span class="main_gro_error">@error('designation'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box2">
                            <label class="main_gro_add_form_line1_box1_head">
                                Password
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <input type="password" name="password" class="main_gro_add_form_line1_box1_input"
                             placeholder ="Password for the GRM officer">
                             <span class="main_gro_error">@error('password'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box3">
                            <label class="main_gro_add_form_line1_box1_head">
                                Confirm Password
                            <label class="main_gro_add_form_line1_box1_head_asterik">
                                *
                            </label>
                            </label>

                            <input type="password" name="cpassword" class="main_gro_add_form_line1_box1_input"
                             placeholder ="Confirm Password for the GRM officer">
                            <span class="main_gro_error">@error('cpassword'){{ $message }} @enderror</span>
                        </span>
                    </span>

                    <button class="main_gro_add_form_button">Register User</button>
                </form>
            </div>
            <!-- add pop up -->

            <!-- filter pop up -->
            <div class="main_gro_add" class="main_gro_filter" id="main_gro_filter"
            style="visibility: hidden">
                <span class="main_gro_add_bg"></span>

                <span class="main_gro_add_main">
                    <span class="main_gro_add_main_header">
                        <label class="main_gro_add_main_header_lab">
                            Filter GRM Officers Search
                        </label>

                        <img src="{{ URL('img/close.png') }}" alt="close"
                        class="main_gro_filter_main_header_img" id="main_gro_filter_main_header_img">
                    </span>
                </span>

                <form action="{{ route('gro_filter') }}"
                method="POST" class="main_gro_add_form">
                    @csrf
                    <span class="main_gro_add_form_line1">
                        <span class="main_gro_add_form_line1_box1">
                            <label class="main_gro_add_form_line1_box1_head">
                                Designation
                            </label>

                            <select name="designation1" class="main_gro_add_form_line1_box1_input">
                                <option selected disabled>Designation</option>
                                <option value="National Grm">National Grm Officer</option>
                                <option value="State Grm">State Grm Officer</option>
                                <option value="LGA Grm">LGA Grm Officer</option>
                            </select>

                             <span class="main_gro_error">@error('fname'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box2">
                            <label class="main_gro_add_form_line1_box1_head">
                                State
                            </label>

                             <select name="state1" id="main_gro_state1"
                            class="main_gro_add_form_line1_box1_input">
                                <option selected disabled>State of the GRM Officer</option>
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

                             <span class="main_gro_error">@error('mname'){{ $message }} @enderror</span>
                        </span>

                        <span class="main_gro_add_form_line1_box3">
                            <label class="main_gro_add_form_line1_box1_head">
                                LGA
                            </label>

                            <select name="lga1" id="main_gro_lga1" class="main_gro_add_form_line1_box1_input">
                                <option selected disabled>LGA of of the GRM Officer</option>
                            </select>
                             <span class="main_gro_error">@error('lname'){{ $message }} @enderror</span>
                        </span>
                    </span>

                    <button class="main_gro_add_form_button">Search</button>
                </form>
            </div>
            <!-- filter pop up -->
        </div>
    </div>
</body>

<script src="{{ URL('js/national/gro1.js') }}"></script>

<script>
    // get base URL to use in AJAX calls
    $(document).ready(function () {
        //Add menie state
        $('#main_gro_state').on('change', function () {
            //alert("sdsdsdsd");
            var stateid = this.value;
            $('#main_gro_lga').html('');
            $.ajax({
                url: '{{ route('getLgas') }}?stateid='+stateid,
                type: 'get',
                success: function (res) {
                    if(res)
                    {
                        $('#main_gro_lga').html('<option selected disabled>LGA of the GRM Officer</option>');
                        $.each(res, function (key, value) {
                            $('#main_gro_lga').append('<option value="' + value
                            .lga + '">' + value.lgan + '</option>');
                        });
                    }
                }
            })
        })

        $('#main_gro_state1').on('change', function () {
            //alert("filter state");
            var stateid = this.value;
            $('#main_gro_lga').html('');
            $.ajax({
                url: '{{ route('getLgas') }}?stateid='+stateid,
                type: 'get',
                success: function (res) {
                    if(res)
                    {
                        $('#main_gro_lga1').html('<option selected disabled>LGA of the GRM Officer</option>');
                        $.each(res, function (key, value) {
                            $('#main_gro_lga1').append('<option value="' + value
                            .lga + '">' + value.lgan + '</option>');
                        });
                    }
                }
            })
        })

        //gro_search
        $('#main_header_search').keyup(function() {
            //alert("Sasas");
            var search_input = this.value;

            document.cookie = "search_input = "  + search_input;

            //alert(search_input);

            if(search_input != "")
            {
                //alert("sasas");
                $.ajax({
                    url: "{{ route('gro_search') }}",
                    type: 'get',
                    //data: {search_input:search_input},
                    success: function (res) {
                        if(res)
                        {
                            //alert('sdsd');
                            //window.location.reload('#info_table');
                            $('#main_gro_table1').load(' #main_gro_table1');
                        }
                    }
                });
            }
            else{
                //alert("empty");
                $.ajax({
                    url: "{{ route('all_gro') }}"
                });
            }
        });



    });

    //open add code
        const filter_show = document.getElementById("main_gro_header_filter");

        const filter_hide = document.getElementById("main_gro_filter_main_header_img");

        const filter_box = document.getElementById("main_gro_filter");

        filter_show.addEventListener("click", (event) => {
            //alert("Nassco");
            filter_box.style.visibility = "visible";
        });

        filter_hide.addEventListener("click", (event) => {
            filter_box.style.visibility = "hidden";
        });
</script>

</html>
