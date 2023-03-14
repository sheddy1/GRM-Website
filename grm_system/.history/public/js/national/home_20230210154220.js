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

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: "#EFEDED",
        plotBorderWidth: 20,
        height: 205,
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
            { name: 'Resolved', y: 30},
            { name: 'Under Review', y: 40},
            { name: 'New cases', y: 30}
            // { name: 'Firefox', y: 4.96 },
            // { name: 'Safari', y: 2.49 },
            // { name: 'Internet Explorer', y: 2.31 },
            // { name: 'Other', y: 3.398 }
        ]
    }]
});
// end of oval chart

Highcharts.chart('container1', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
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
                show: false
            },
        }
    },

});

//END OF

//grieviance catergory code
Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: "#EFEDED",
        plotBorderWidth: 20,
        height: 205,
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
            { name: 'Resolved', y: 30},
            { name: 'Under Review', y: 20},
            { name: 'New cases', y: 15},
            { name: 'Resolve', y: 10},
            { name: 'Under Revie', y: 15},
            { name: 'New case', y: 10}
        ]
    }]
});

// end of grieve cat code

//grieviance complaint code
Highcharts.chart('container4', {
    chart: {
        plotBackgroundColor: "#EFEDED",
        plotBorderWidth: 20,
        height: 205,
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
            { name: 'Resolved', y: 30},
            { name: 'Under Review', y: 20},
            { name: 'New cases', y: 15},
            { name: 'Resolve', y: 10},
            { name: 'Under Revie', y: 15},
            { name: 'New case', y: 10}
        ]
    }]
});

//emd of grieviance complaint mode
