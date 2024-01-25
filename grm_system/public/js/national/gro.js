$(document).ready(function(){
    $(".grieve_open").click(function(){
        $(".ul_whole1").toggleClass("ul_whole2");
      });

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

    Highcharts.chart('container1', {
        data: {
            table: 'datatable'
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
});

