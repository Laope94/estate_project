$(document).ready(function() {
    $("#scroll-down").on("click", function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 500);
    });
    $(function () {
        var availableTags = new Array();
        $.getJSON("/database/obce-JSON/districts.json", function (data) {
            $.each(data, function (index, value) {
                availableTags.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });
            $("#tags").autocomplete({
                source: availableTags
            });
        });
    });
});