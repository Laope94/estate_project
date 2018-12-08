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
})