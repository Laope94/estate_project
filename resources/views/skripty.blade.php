<script>
    $(document).ready(function() {
        $("#scroll-down").on("click", function () {
            $('html, body').animate({
                scrollTop: $("#about").offset().top
            }, 500);
        });
        $(function () {
            var availableTags = new Array();
            $.getJSON("{{asset('/districts.json')}}", function (data) {
                $.each(data, function (index, value) {
                    availableTags.push(value.name);
                });
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
        });
    });
</script>