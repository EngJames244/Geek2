$(function(){
    'use strict';
    // Slider Height
    let windowHeight = $(window).height(),
     upHeight        = $('.upperbar').innerHeight(),
     navHeight       = $('.navbar').innerHeight();
    
    $('.slider , .carousel-item').height((windowHeight + 200) - (upHeight + (navHeight)));

    // Courses Show And Hide
    $('.courses ul li').on(click , function(){
        $(this).addClass('active').siblings().removeClass('active');
        if($(this).data('class')==='all'){
            $('.coursesinfo .col-md-4 .col-sm-12').show();
        }else{
            $('.coursesinfo .col-md-4 .col-sm-12').hide();
            $($(this).data('class')).parent.show();
        }
    });
});