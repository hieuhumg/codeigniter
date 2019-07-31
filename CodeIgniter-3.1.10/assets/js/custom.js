$(document).ready(function () {
    $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'
    });
    $( "#date1" ).datepicker({
        dateFormat: 'dd-mm-yy'
    });
    $( "#date2" ).datepicker({
        dateFormat: 'dd-mm-yy'
    });
    $(".search-adv").hide();
    $("button.btn-search").click(function () {
        $(".search-adv").show(1000);
    })
});