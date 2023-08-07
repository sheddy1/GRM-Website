$(document).ready(function(){
    $(".grieve_open").click(function(){
      $(".ul_whole1").toggleClass("ul_whole2");
    });
  });

  //grieviiance summary chart
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

// Highcharts.chart('container', {
//     chart: {
//         plotBackgroundColor: "#EFEDED",
//         plotBorderWidth: 20,
//         height: 205,
//         plotBorderColor: "#EFEDED",
//         plotShadow: false,
//         type: 'pie'

//     },
//     title: {
//         text: ''
//     },

//     credits: {
//         enabled: false
//     },

//     plotOptions: {
//         pie: {
//             type: 'doughnut',
//             allowPointSelect: true,
//             cursor: 'pointer',
//             colors: pieColors,
//             dataLabels: {
//                 enabled: false,
//                 format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
//                 distance: -90,

//             }
//         }
//     },
//     series: [{
//         name: 'Percentage',
//         innerSize: '70%',
//         data: [
//             { name: 'Resolved', y: 30},
//             { name: 'Under Review', y: 40},
//             { name: 'New cases', y: 30}
//             // { name: 'Firefox', y: 4.96 },
//             // { name: 'Safari', y: 2.49 },
//             // { name: 'Internet Explorer', y: 2.31 },
//             // { name: 'Other', y: 3.398 }
//         ]
//     }]
// });
// end of oval chart




    //END OF

    

// end of grieve cat code

//grieviance complaint code
    
    //emd of grieviance complaint mode



    const notification_show = document.getElementById("main_header_desc1_desc_search_icon_drop");

    const notification = document.getElementById("main_header_desc1_desc_not_icon");


    notification.addEventListener("click", (event) => {
        if(notification_show.style.display == "none")
        {
            notification_show.style.display = "block";
        }
        else
        {
            notification_show.style.display = "none";
        }
     });


// container1 change code

    //const container1_chart_a = document.getElementById("sheddy");

    //const container1_chart_a_show = document.getElementById("main_header_desc1_desc_not_icon");

    //container1_chart_a.addEventListener("click", (event) => {
        // if(container1_chart_a_show.style.display == "none")
        // {
        //     container1_chart_a_show.style.display = "block";
        // }
        //alert('sdsdsd');
        
    //});

   

// end container1 change code
