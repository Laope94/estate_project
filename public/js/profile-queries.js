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
});

$(window).on("load", function () {
    fillLocation();
});