
$('.submenu').hide();
var currentShow = '0';
var currentSubbtn = '0';
currentShow = $('#currentMenu').val();
currentSubbtn = $('#currentSubMenu').val();


if(!currentShow){currentShow = '0'}
if(!currentSubbtn){currentSubbtn = '0'}



if (currentShow != '0') {
    $('#' + currentShow).slideDown(200);
}

if (currentSubbtn != '0') {
    $('#' + currentSubbtn).addClass("hilight");
}

$('.dbtn').on('click', function () {
    $('.container-fluid').toggleClass('container-fluidC');
    $('.sidebar_wrapper').toggleClass('side');
    $('.bar1').toggleClass('bar1c');
    $('.bar2').toggleClass('bar2c');
    $('.bar3').toggleClass('bar3c');
});

$('.btn1').on('click', function () {
    var theID = $(this).attr('ID') + '_1';
    if (currentShow != theID) {
        $('#' + currentShow).slideUp(200);
        $('#' + theID).slideDown(200);
        currentShow = theID;
        $('#currentMenu').val(theID);

    } else {
        $('#' + theID).slideUp(200);
        currentShow = '0';
        $('#currentMenu').val('0');
    }

});


$('.subbtn').on('click', function () {
    var theID = $(this).attr('ID');
    if (currentSubbtn == '0') {
        $('#' + theID).addClass("hilight");
        currentSubbtn = theID;
        $('#currentSubMenu').val(theID);
    } else if (currentSubbtn != theID) {
        $('#' + currentSubbtn).removeClass("hilight");
        $('#' + theID).addClass("hilight");
        currentSubbtn = theID;
        $('#currentSubMenu').val(theID);
    }
});
