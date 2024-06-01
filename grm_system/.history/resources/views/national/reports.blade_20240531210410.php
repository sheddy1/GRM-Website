@php
    use Illuminate\Support\Facades\Session;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRM Reports</title>
    <link rel="icon" href="{{ URL('img/nassco_logo.png') }}">
    <link rel="stylesheet" href="{{ URL('css/national/report.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://rawgit.com/highcharts/rounded-corners/master/rounded-corners.js"></script>

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

                <label for="check_notification">
                    <img src="{{ URL('img/bell.png') }}" alt="notification Icon" class="main_header_desc1_desc_not_icon">
                    <span class="bell_circle">
                        <label>1</label>
                    </span>
                </label>

                <input type="checkbox" id="check_notification" style="visibility: hidden">

                <span class="main_notification_box" style>
                    <table class="main_notification_box_table" style="border: 1px solid black">
                        <tr class="main_notification_box_table_tr">
                            <td>You Have 26 New Gieviances that needs your attention</td>
                        </tr>
                    </table>
                </span>

                <img src="{{ URL('img/search1.png') }}" alt="search Icon" class="main_header_desc1_desc_search_icon" style="display:none">
            </span>

            <label class="header_grieviance">Grieviances</label>

            <label class="header_location">
                <img src="{{ url('img/home.png') }}" >
                /Reports
            </label>
        </div>

        <div class="info">
            <div class="info_category">
                <span class="main_chart1_bar">
                    <span class="main_chart1_bar_header">
                        <label class="main_chart1_bar_header_lab">Category Summary</label>

                        @php
                            $cat_state = session::get('cat_state');
                        @endphp

                        <form action="{{ route('category_list') }}" method="post">
                            @csrf

                            <select name="category" class="main_chart1_bar_header_lab_drop" id="main_chart1_bar_header_lab_drop">
                                <option selected disabled>{{ $cat_state }}</option>
                                <option value="fct">FCT</option>
                                <option value="abia">ABIhA</option>
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

                            <span class="main_chart1_bar_header_lab_drop_export" id="main_chart1_bar_header_lab_drop_export">
                                    <button class="main_chart1_bar_header_lab_drop_export1">
                                        Export <img src="{{ URL('img/vector.png') }}" alt="export_image">
                                    </button>
                            </span>
                        </form>
                    </span>

                    <span class="main_chart1_bar_chart">
                        <span id="container1"></span>

                        <table id="datatable" style="display: none">
                            <thead>
                            <tr >
                                <th>asasas</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>WRONGFUL </br> INCLUSION/ </br> EXCLUSION</th>
                                    <td>{{ $cat1 }}</td>
                                </tr>
                                <tr>
                                    <th>PAYMENTS AND </br> PAYMENT SERVICE </br> DELIVERY</th>
                                    <td>{{ $cat2 }}</td>
                                </tr>
                                <tr>
                                    <th>NASSP SERVICE <br> DELIVERY ISSUES</th>
                                    <td>{{ $cat3 }}</td>
                                </tr>
                                <tr>
                                    <th>FRAUD AND <br> CORRUPTION ISSUES</th>
                                    <td>{{ $cat4 }}</td>
                                </tr>
                                <tr>
                                    <th>DATA ERRORS </br> AND UPDATES</th>
                                    <td>{{ $cat5 }}</td>
                                </tr>
                                <tr>
                                    <th>INQUIRIES AND </br> INFORMATION REQUESTS</th>
                                    <td>{{ $cat6 }}</td>
                                </tr>
                                <tr>
                                    <th>ORTHERS</th>
                                    <td>{{ $cat7 }}</td>
                                </tr>
                                <tr>
                                    <th>ABUSE AND </br> SOCIAL ISSUES</th>
                                    <td>{{ $cat7 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </span>
            </div>

            <div class="info_status">
                <span class="main_chart1_oval_header">
                    <label class="main_chart1_oval_header_desc">Status Summary</label>

                    <select name="main_chart1_oval_header_drop" class="main_chart1_oval_header_drop" id="main_chart1_oval_header_drop">
                        <option selected disabled>{{$month}}</option>
                        <option value="january">January</option>
                        <option value="febuary">Febuary</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>

                    <select name="selected disabled" class="main_chart1_oval_header_drop1" id="main_chart1_oval_header_drop1">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </span>

                <span class="main_chart1_oval_desc">
                        <span class="main_chart1_oval_desc1">
                                <label class="main_chart1_oval_desc1_lab">
                                    <img src="{{ URL('img/circle1.png') }}" alt="" class="circle1">
                                    Resolved
                                </label>
                        </span>

                        <span class="main_chart1_oval_desc2">
                            <label class="main_chart1_oval_desc1_lab">
                                <img src="{{ URL('img/circle2.png') }}" alt="" class="circle1">
                                Under Review
                            </label>
                        </span>

                        <span class="main_chart1_oval_desc3">
                            <label class="main_chart1_oval_desc1_lab">
                                <img src="{{ URL('img/circle3.png') }}" alt="" class="circle1">
                                New cases
                            </label>
                        </span>
                </span>

                <span class="main_chart1_oval_chart" >
                        <span id="container2"></span>

                        <spanCom class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text4" >
                            Summary <br> of <br> Grieviances
                        </spanCom

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text1" style="display:none">
                            Resolved <br>  Grieviances <br> {{ session::get('report_percentage_resolved')}}
                        </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text2" style="display:none">
                            Reviewed <br> Grieviances <br> {{ session::get('report_percentage_new')}}
                        </span>

                        <span class="main_chart1_oval_chart_text1" id="main_chart1_oval_chart_text3" style="display:none">
                            New <br> Grieviances <br> {{ session::get('report_percentage_review')}}
                        </span>
                </span>

                    {{--  <div id="container" class="main_chart1_oval_chart" ></div>  --}}
            </div>

            <div class="info_complain">
                <span class="main_chart1_oval_header">
                    <label class="main_chart1_oval_header_desc">Complaint Mode Summary</label>

                    <button class="info_complain_export_btn">
                        Export <img src="{{ URL('img/vector.png') }}" alt="export_image">
                    </button>

                    <span class="main_chart1_oval_chart" >
                        <span id="container3"></span>

                    </span>
                </span>
            </div>
        </div>
    </div>
</body>

<script src="{{ URL('js/national/gro.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#main_chart1_bar_header_lab_drop').on('change', function () {
            var cat_state = this.value;
            //alert("God is awesome");
            document.cookie = "cat_state = "  + cat_state;
            $.ajax({
                url: "{{ route('cat_state') }}",
            });
            $("#container1").load(location.href + "#container1");
        });

        // year change for pie chart (grieviance summary)
        $('#main_chart1_oval_header_drop').on('change', function () {
            alert("Nassco");

            var report_summary_year = this.value;

            alert(report_summary_year);
           // document.cookie = "report_summary_year = "  + report_summary_year;

            //$.ajax({
               // url: "{{ route('chart_date') }}",
           // });
        });


        //$('#main_chart1_bar_header_lab_drop_export').on('click', function () {
           // alert("God is awesome");
           // $.ajax({
              //  url: "{{ route('category_list') }}",
           // });
           // $("#container1").load(location.href + "#container1");
       // });

        var pieColors = (function () {
            var colors = [],
                base = Highcharts.getOptions().colors[2],
                i;

            for (i = 0; i < 10; i += 1) {
                // Start out with a darkened base color (negative brighten), and end
                // up with a much brighter color
                colors.push(Highcharts.color(base).brighten((i - 4) / 7).get());
            }
            return colors;
        }());

        Highcharts.chart('container2', {
            chart: {
                plotBackgroundColor: "#EFEDED",
                plotBorderWidth: 20,
                height: 240,
                plotBorderColor: "#EFEDED",
                plotShadow: false,
                type: 'pie'

            },
            title: {
                text: ''
            },

            credits: {
                enabled: false
            },

            plotOptions: {
                pie: {
                    type: 'doughnut',
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        distance: -90,

                    }
                }
            },

            series: [{
                name: 'Percentage',
                innerSize: '70%',
                data: [
                    { name: 'Resolved', y: {{ session::get('report_percentage_resolved') }}, id: 'sheddy1'},
                    { name: 'Under Review', y: {{ session::get('report_percentage_review') }}, id: 'sheddy2'},
                    { name: 'New cases', y: {{ session::get('report_percentage_new') }}, id: 'sheddy3'},
                ],
                point:{
                    events:{
                        click: function() {
                            grieve_summary1 = document.getElementById("main_chart1_oval_chart_text1");
                            grieve_summary2 = document.getElementById("main_chart1_oval_chart_text2");
                            grieve_summary3 = document.getElementById("main_chart1_oval_chart_text3");
                            grieve_summary4 = document.getElementById("main_chart1_oval_chart_text4");

                            var sum_id =  this.id;

                            //alert(sum_id);

                            if(sum_id == "sheddy1"){
                                if(grieve_summary1.style.display == "none")
                                {
                                    grieve_summary1.style.display = "block";
                                    grieve_summary2.style.display = "none";
                                    grieve_summary3.style.display = "none";
                                    grieve_summary4.style.display = "none";
                                }
                                else{
                                    grieve_summary1.style.display = "none";
                                    grieve_summary2.style.display = "none";
                                    grieve_summary3.style.display = "none";
                                    grieve_summary4.style.display = "block";
                                }
                            }
                            else if(sum_id == "sheddy2")
                            {
                                if(grieve_summary2.style.display == "none")
                                {
                                    grieve_summary2.style.display = "block";
                                    grieve_summary1.style.display = "none";
                                    grieve_summary3.style.display = "none";
                                    grieve_summary4.style.display = "none";
                                }
                                else{
                                    grieve_summary2.style.display = "none";
                                    grieve_summary1.style.display = "none";
                                    grieve_summary3.style.display = "none";
                                    grieve_summary4.style.display = "block";
                                }
                            }
                            else if(sum_id == "sheddy3")
                            {
                                if(grieve_summary3.style.display == "none")
                                {
                                    grieve_summary3.style.display = "block";
                                    grieve_summary1.style.display = "none";
                                    grieve_summary2.style.display = "none";
                                    grieve_summary4.style.display = "none";
                                }
                                else{
                                    grieve_summary3.style.display = "none";
                                    grieve_summary1.style.display = "none";
                                    grieve_summary2.style.display = "none";
                                    grieve_summary4.style.display = "block";
                                }
                            }
                        }
                    }
                }
            }],
        });

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: "#EFEDED",
                plotBorderWidth: 20,
                height: 240,
                plotBorderColor: "#EFEDED",
                plotShadow: false,
                type: 'pie'

            },
            title: {
                text: ''
            },

            credits: {
                enabled: false
            },

            plotOptions: {
                pie: {
                    type: 'doughnut',
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors: pieColors,
                    dataLabels: {
                        enabled: false,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        distance: -90,

                    }
                }
            },
            series: [{
                name: 'Percentage',
                innerSize: '0',
                data: [
                    { name: 'Online', y: 20, id: 'sheddy1'},
                    { name: 'Phone', y: 40, id: 'sheddy2'},
                    { name: 'Sms', y: 40, id: 'sheddy3'},
                    { name: 'Social Media', y: 40, id: 'sheddy4'},
                    { name: 'Email', y: 40, id: 'sheddy5'},
                    { name: 'In Person', y: 40, id: 'sheddy6'},
                ],
            }],
        });
    });





</script>

</html>
