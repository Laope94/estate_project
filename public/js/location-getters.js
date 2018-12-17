function getRegion(id) {
    var name= null;
    $.ajaxSetup({
        async: false
    });
    $.getJSON(('/json/regions.json'),  function (data) {
        $.each(data, function (index, value) {
            if (value.id == id) {
                name = value.name;
            }
        })
      });
    return name;
};

function getDistrict(id){
    var name= null;
    $.ajaxSetup({
        async: false
    });
    $.getJSON(('/json/districts.json'),  function (data) {
        $.each(data, function (index, value) {
            if (value.id == id) {
                name = value.name;
            }
        })
    });
    return name;
}
