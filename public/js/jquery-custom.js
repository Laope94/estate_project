$(document).ready(function () {
    $("#scroll-down").on("click", function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 500);
    });

    $.getJSON('json/districts.json', function (data) {
        var availableTags = new Array();
        $.each(data, function (index, value) {
            availableTags.push(value.name);
        });
        $("#tags").autocomplete({
            source: availableTags
        });
    });

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
    })

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
    })

    $("#typ").change(function () {
        var selectedType = $("#typ").val();
        if (selectedType == 2 || selectedType == 3) {
            $("#pocet_izieb").prop('disabled', false);
            $("#izby").show();
        }
        else {
            $("#pocet_izieb").prop('disabled', true);
            $("#izby").hide();
        }
    });

    $("#edit-user").on("click", function () {
             $(".dis-field").prop('disabled', false);
             $("#save-changes").show();
             $("#edit-user").hide();
             $("#stop-edit").show();
    })

    $("#stop-edit").on("click", function () {
        $("#edit-user-form")[0].reset();
        $(".dis-field").prop('disabled', true);
        $("#save-changes").hide();
        $("#edit-user").show();
        $("#stop-edit").hide();
    })

        $('.gallery a').simpleLightbox();
});
