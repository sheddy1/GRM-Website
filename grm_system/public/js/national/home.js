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
