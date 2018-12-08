$(document).ready(function () {
    $("#fake-button").on("click", function () {
        $("#real-button").trigger('click');
    })
});