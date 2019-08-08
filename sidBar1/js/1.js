
    $('.smenu').hide();

    $('.btn').on('click', function () {

        var theID = $(this).attr('ID');
        $('#'+theID+'1').slideToggle(200);

    });
