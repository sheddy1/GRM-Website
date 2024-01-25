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
  


  Highcharts.chart('container2', {
    data: {
        table: 'datatable2'
    },
    chart: {
        type: 'column',
        color: '#627C33',
        // plotBackgroundColor: "#EFEDED",
        // BorderColor: "#EFEDED",
    },
    title: {
        text: ''
    },
    credits: {
        enabled: false
    },
    subtitle: {
        text:
            ''
    },
    xAxis: {
        type: '',
        title: {
            text:''
        }

    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: ''
        }
    },
    xAxis: {
        allowDecimals: false,
    },
    tooltip: {

    },
    plotOptions: {
        column: {
            borderRadius: 0,
            borderRadiusTopLeft: '20',
            borderRadiusTopRight: '20',
            color: '#627C33',
        },

        series: {
            
            label: {
                connectorAllowed: false,
                show: false,
                display: false
            },
            showInLegend: false,
            }
        },

});





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
