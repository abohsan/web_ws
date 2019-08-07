$(function () {
    $('.smenu').hide();
    $('.btn').on('click', function () {
        $('.smenu').slideUp(200);

        // $('#subProfile').slideToggle(200);
        var theID = $(this).attr('ID');
        $('#'+theID+'1').slideToggle(200);
        // alert(theID);
    });
});

$(".btn").click (function(e){
    e.preventDefault();
});
