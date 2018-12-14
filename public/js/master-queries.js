$(document).ready(function () {
    $('#mobile-icon').on('click', function () {
        $("#mobile-icon").hide("fast", function () {
            $("#mobile-menu").show("fast");
        });
    });
});
$('#close-nav').on('click', function () {
    $("#mobile-menu").hide("fast", function () {
        $("#mobile-icon").show("fast");
    });
})
$(window).resize(function(){
    if($(this).width() <= 999){
        $('#mobile-icon').show();
        $('#mobile-menu').hide();
    }
    else{
        $('#mobile-icon').hide();
        $('#mobile-menu').hide();
    }
});