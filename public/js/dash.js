$(document).ready(function () {
    $('#hide-dash').on('click', function () {
        $("#dash").hide("slow", function () {
            $("#dash-display").show("slow");
        });

    });
    $('#dash-display').on('click', function () {
        $("#dash-display").hide("slow", function () {
            $("#dash").show("slow");
        })
    })
});
$(window).resize(function(){
    if($(this).width() <= 999){
        $('#dash-display').show();
        $('#dash').hide();
    }
    else{
        $('#dash').show();
        $('#dash-display').hide();
    }
});