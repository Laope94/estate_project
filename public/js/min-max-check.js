$(document).ready(function () {
    $("#min_price").on('change', function () {
        var min = $("#min_price").val();
        if (min > 0) {
            $("#max_price").attr({"required": true, "min": min});
        }
        else {
            $("#max_price").attr({"required": false, "min": '0'});
        }
    });
    $("#max_price").on('change', function () {
        var max = $("#max_price").val();
        if (max > 0) {
            $("#min_price").attr({"required": true, "max": max});
        }
        else {
            $("#min_price").attr({"required": false, "max": ''});
        }
    });
    $("#min_area").on('change', function () {
        var min = $("#min_area").val();
        if (min > 0) {
            $("#max_area").attr({"required": true, "min": min});
        }
        else {
            $("#max_area").attr({"required": false, "min": '0'});
        }
    });
    $("#max_area").on('change', function () {
        var max = $("#max_area").val();
        if (max > 0) {
            $("#min_area").attr({"required": true, "max": max});
        }
        else {
            $("#min_area").attr({"required": false, "max": ''});
        }
    });
});