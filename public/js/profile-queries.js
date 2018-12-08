$(document).ready(function () {
    $("#edit-user").on("click", function () {
        $(".dis-field").prop('disabled', false);
        $("#save-changes").show();
        $("#edit-user").hide();
        $("#stop-edit").show();
    });

    $("#stop-edit").on("click", function () {
        $("#city").find('option').remove().end();
        $("#okres").find('option').remove().end();
        $("#kraj").find('option').remove().end();
        fillLocation();
        $("#edit-user-form")[0].reset();
        $(".dis-field").prop('disabled', true);
        $("#save-changes").hide();
        $("#edit-user").show();
        $("#stop-edit").hide();
    });

    $("#kraj").change(function () {
        var selectedKraj = $("#kraj").val();
        $("#okres").find('option').remove().end();
        $("#city").find('option').remove().end();
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
        $("#city").find('option').remove().end();
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
    });
});

$(window).on("load", function () {
  fillLocation();
});

function fillLocation() {
    var kraj = $("#user_kraj").text();
    var okres = $("#user_okres").text();
    var mesto = $("#user_mesto").text();
    var kraj_id;
    var okres_id;
    $.getJSON(('/json/regions.json'), function (data) {
        $.each(data, function (index, value) {
            var option = $("<option />");
            option.val(value.id);
            option.html(value.name);
            if(value.name==kraj){
                option.attr("selected", "selected");
                kraj_id=value.id;
            }
            $("#kraj").append(option);
        });
    });
    $.getJSON(('/json/districts.json'), function (data) {
        $.each(data, function (index, value) {
            if (value.region_id == kraj_id) {
                var option = $("<option />");
                option.val(value.id);
                option.html(value.name);
                if(value.name==okres){
                    option.attr("selected", "selected");
                    okres_id=value.id;
                }
                $("#okres").append(option);
            }
        });
    });
    $.getJSON(('/json/villages.json'), function (data) {
        $.each(data, function (index, value) {
            if (value.district_id == okres_id) {
                var option = $("<option />");
                option.val(value.fullname);
                option.html(value.fullname);
                if (value.fullname == mesto) {
                    option.attr("selected", "selected");
                }
                $("#city").append(option);
            }
        });
    });
}