$(document).ready(function () {
    $("#privilege").on('change', function () {
        var selected = $("#privilege").val();
        if(selected==1 || selected>=4){
            if(!$("#agency-1").length){
                $("#agency").prepend("<option id='agency-1' value='1' selected>Bez kancelárie</option>");
            }
            if(!$("#hidden_a").length) {
                $("#edit-form").append("<input hidden name='agency' id='hidden_a' value='0'> ");
            }
            $("#agency").prop("disabled", true);
        }
        else{
            $("#hidden_a").remove();
            $("#agency-1").remove();
            $("#agency").prop("disabled", false);
        }
    })
});