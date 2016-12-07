$(document).ready(function() {

    $('#nav1').affix({
        offset: {
            top: 100
        }
    });

    $('#rain').affix({
        offset: {
            top: 100
        },
        display: 'none'
    });

    $('#logo').affix({
        offset: {
            top: 100
        },
        display: 'none'
    });


    //var h_hght = 60; // высота шапки
    //var h_mrg = -2;    // отступ когда шапка уже не видна
    //
    //$(function(){
    //    $(window).on('scrollstart', function() {
    //        var top = $(this).scrollTop();
    //        var elem = $('#top_nav');
    //        if (top+h_mrg < h_hght) {
    //            elem.css('top', (h_hght-top));
    //            $('#rain').show();
    //            $('#logo').show();
    //            $('#nav1').css('width','76%')
    //                .css('border-radius', '10px');
    //
    //        } else {
    //            elem.css('top', h_mrg)
    //                .css('width','100%');
    //            $('#rain').hide();
    //            $('#logo').hide();
    //            $('#nav1').css('width','100%')
    //                .css('border-radius', '0');
    //        }
    //    });
    //});
});


