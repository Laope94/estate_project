$(document).ready(function () {
    getUrlParameters();
})
function getUrlParameters() {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if(sParameterName[0].substring(0,6)=="issale"){
            if(sParameterName[1]==0){$("#issale-0").prop("checked", true); }
            if(sParameterName[1]==1){$("#issale-1").prop("checked", true);}
        }
        if(sParameterName[0].substring(0,4)=="type"){
            var decoded = decodeURI(sParameterName[1]).replace('+', ' ');
            if(decoded=="All"){$("#type-all").attr("selected", true);}
            if(decoded=="Garsónka"){$("#type-garsonka").attr("selected", true);}
            if(decoded=="Byt"){$("#type-byt").attr("selected", true);}
            if(decoded=="Rodinný dom"){$("#type-dom").attr("selected", true);}
            if(decoded=="Nebytový priestor"){$("#type-nebytovy").attr("selected", true);}
            if(decoded=="Pozemok"){$("#type-pozemok").attr("selected", true);}
            if(decoded=="Iné"){$("#type-ine").attr("selected", true);}
        }
        if(sParameterName[0]=="room_number") {
            $("#rooms").val(sParameterName[1]);
        }
        if(sParameterName[0]=="min_price"){
            $("#min_price").val(sParameterName[1]);
            if (sParameterName[1] > 0) {
                $("#max_price").attr({"required": true, "min": sParameterName[1]});
            }
        }
        if(sParameterName[0]=="max_price"){
            $("#max_price").val(sParameterName[1]);
            if (sParameterName[1] > 0) {
                $("#min_price").attr({"required": true, "max": sParameterName[1]});
            }
        }
        if(sParameterName[0]=="min_area"){
            $("#min_area").val(sParameterName[1]);
            if (sParameterName[1] > 0) {
                $("#max_area").attr({"required": true, "min": sParameterName[1]});
            }
        }
        if(sParameterName[0]=="max_area"){
            $("#max_area").val(sParameterName[1]);
            if (sParameterName[1] > 0) {
                $("#min_area").attr({"required": true, "max": sParameterName[1]});
            }
        }
        if(sParameterName[0]=="kraj"){
            $("#hidden-data").append("<span id='h_kraj'>"+getRegion(sParameterName[1])+"</span>");
        }
        if(sParameterName[0]=="okres"){
            $("#hidden-data").append("<span id='h_okres'>"+getDistrict(sParameterName[1])+"</span>");
        }
        if(sParameterName[0]=="city"){
            $("#hidden-data").append("<span id='h_mesto'>"+decodeURI(sParameterName[1]).replace('+', ' ')+"</span>");
        }
    }
    if($("#h_kraj").length || $("#h_okres").length || $("#h_mesto").length){
        if($("#h_kraj").length)
            $("#okres").attr("disabled", false);
        if($("#h_okres").length)
            $("#city").attr("disabled", false);
        fillLocation();
    }
    else{
        loadLocation();
    }
    $("#kraj").change(function () {
        var selectedKraj = $("#kraj").val();
        $("#okres").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#city").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#okres").prop('disabled', false);
        $("#city").prop('disabled', true);
        $.getJSON(('/json/districts.json'), function (data) {
            $.each(data, function (index, value) {
                if (value.region_id == selectedKraj) {
                    var option = $("<option />");
                    option.val(value.id);
                    option.html(value.name);
                    $("#okres").append(option);
                }
            });
        });
    });

    $("#okres").change(function () {
        var selectedOkres = $("#okres").val();
        $("#city").find('option').remove().end().append('<option disabled selected value>----------------------------------</option>');
        $("#city").prop('disabled', false);
        $.getJSON(('/json/villages.json'), function (data) {
            $.each(data, function (index, value) {
                if (value.district_id == selectedOkres) {
                    var option = $("<option />");
                    option.val(value.fullname);
                    option.html(value.fullname);
                    $("#city").append(option);
                }
            });
        });
    });
}