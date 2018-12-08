$(document).ready(function () {
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
});