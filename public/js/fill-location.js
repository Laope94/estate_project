function fillLocation() {
    var kraj = $("#h_kraj").text();
    var okres = $("#h_okres").text();
    var mesto = $("#h_mesto").text();
    var kraj_id;
    var okres_id;

    $.getJSON(('/json/regions.json'), function (data) {
        $.each(data, function (index, value) {
            var option = $("<option />");
            option.val(value.id);
            option.html(value.name);
            if(value.name==kraj){
                option.attr("selected", "selected");
                kraj_id=value.id;
            }
            $("#kraj").append(option);
        });
    });

    $.getJSON(('/json/districts.json'), function (data) {
        $.each(data, function (index, value) {
            if (value.region_id == kraj_id) {
                var option = $("<option />");
                option.val(value.id);
                option.html(value.name);
                if(value.name==okres){
                    option.attr("selected", "selected");
                    okres_id=value.id;
                }
                $("#okres").append(option);
            }
        });
    });

    $.getJSON(('/json/villages.json'), function (data) {
        $.each(data, function (index, value) {
            if (value.district_id == okres_id) {
                var option = $("<option />");
                option.val(value.fullname);
                option.html(value.fullname);
                if (value.fullname == mesto) {
                    option.attr("selected", "selected");
                }
                $("#city").append(option);
            }
        });
    });
}