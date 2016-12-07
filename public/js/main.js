$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.cssload-container');
    $spinner.fadeOut();
    $preloader.delay(0).fadeOut('fast');
});

$(document).ready(function(){
    $('#logo').animate({
        opacity: 1
    }, 4000);
    $('#rain').animate({
        opacity: 1,
        margin: 0
    }, 4000);

    //setTimeout(animateСlouds1, 2000);
    //setTimeout(animateСlouds2, 2000);
    //setTimeout(animateClouds3, 2000);

});


function animateСlouds1() {
    $('#cloud-1').animate({
        top:"-=-11%",
        left:"-=-7%",
        opacity: 0.9
    },5000);

    $('#cloud-4').animate({
        top:"-=-5%",
        right:"-=-8%",
        opacity: 0.9
    },5000);

}
function animateСlouds2() {

    $('#cloud-2').animate({
        top:"-=-5%",
        left:"-=-10%",
        opacity: 0.9
    },5000);


    $('#cloud-5').animate({
        top:"-=-5%",
        right:"-=-5%",
        opacity: 0.9
    },5000);
}
function animateClouds3() {
    $('#cloud-3').animate({
        top:"-=-5%",
        left:"-=-5%",
        opacity: 0.9
    }, 5000);
}