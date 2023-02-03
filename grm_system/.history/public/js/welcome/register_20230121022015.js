$(document).ready(function () {
    $('#state_select').on('change', function () {
        var stateid = this.value;
        //alert("sdsdsdsd" + stateid);
        $('#lga_select').html('');
        $.ajax({
            url: '{{ route('getLgas') }}?stateid='+stateid,
            type: 'get',
            success: function (res) {
                if(res)
                {
                    $('#lga_select').html('<option value="">Select LGA</option>');
                    $.each(res, function (key, value) {
                        $('#lga_select').append('<option value="' + value
                        .lga + '">' + value.lgan + '</option>');
                    });
                }
                else{
                    alert("not working");
                }
            }
        })
    });
});
