$(document).ready(function () {
    $(".delete-element").on('click', function (e) {
        if(confirm("Ste si istý?")){
        }
        else{
            e.preventDefault();
        }
    })
})