$(document).ready(function () {
    $("#privilege").on('change', function () {
        var selected = $("#privilege").val();
        if(selected==1 || selected>=4){
            if(!$("#agency-1").length){
                $("#agency").prepend("<option id='agency-1' value='1' selected>Bez kancelárie</option>");
            }
            $("#agency").prop("disabled", true);
        }
        else{
            $("#agency-1").remove();
            $("#agency").prop("disabled", false);
        }
    })
});