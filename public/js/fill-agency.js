$(window).on("load", function () {
    var agency_name = $("#h_agency").val();
    $("#agency option:contains("+agency_name+")").attr('selected', 'selected');
});