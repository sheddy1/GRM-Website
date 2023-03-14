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
        type: 'bar'

    },
    title: {
        text: ''
    },

    credits: {
        enabled: false
    },

    plotOptions: {
        bar: {
            type: 'doughnut',
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: false,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',


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
