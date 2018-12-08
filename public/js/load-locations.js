$(document).ready(function () {
    $.getJSON(('/json/regions.json'), function (data) {
        $.each(data, function (index, value) {
            var option = $("<option />");
            option.val(value.id);
            option.html(value.name);
            $("#kraj").append(option);
        });
    });

    $("#kraj").change(function () {
        var selectedKraj = $("#kraj").val();
        $("#okres").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#city").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#okres").prop('disabled', false);
        $("#city").prop('disabled', true);
        $.getJSON(('/json/districts.json'), function (data) {
            $.each(data, function (index, value) {
                if (value.region_id == selectedKraj) {
                    var option = $("<option />");
                    option.val(value.id);
                    option.html(value.name);
                    $("#okres").append(option);
                }
            });
        });
    });

    $("#okres").change(function () {
        var selectedOkres = $("#okres").val();
        $("#city").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#city").prop('disabled', false);
        $.getJSON(('/json/villages.json'), function (data) {
            $.each(data, function (index, value) {
                if (value.district_id == selectedOkres) {
                    var option = $("<option />");
                    option.val(value.fullname);
                    option.html(value.fullname);
                    $("#city").append(option);
                }
            });
        });
    });})