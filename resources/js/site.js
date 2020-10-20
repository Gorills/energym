
global.jquery = global.jQuery = global.$ = require('jquery');




$(window).scroll(function() {
    var height = $(window).scrollTop();
    var width = $(window).width();
    /*Если сделали скролл на 100px задаём новый класс для header*/
    if((height > 500) & (width > 992)){
        $('header').addClass('header--fixed');



    } else{
        /*Если меньше 100px удаляем класс для header*/
        $('header').removeClass('header--fixed');
        $('.breadcrumb').removeClass('breadcrumb--active');

    }
});



$(".menu-btn").click(function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $(".header").toggleClass('header--active');

})

$(".header__link").click(function(e) {
    $(".menu-btn").removeClass('menu-btn_active');
    $(".header").removeClass('header--active');

})




function explode(){
    $('.action-popup').show();
    $('.action-popup__closer').show();

}
setTimeout(explode, 10000);

$(".action-popup__closer, .action-popup__close").click(function(e) {
    e.preventDefault();
    $(".action-popup__closer").hide();
    $(".action-popup").hide();

})



jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__link"),function(){
        if(this.href==url){
            $(this).addClass('header__link--active');
        }
    });
});

jQuery(document).ready(function($) {
    var url=document.location.href;
    $.each($(".header__dropdown-link"),function(){
        if(this.href==url){
            $(this).addClass('header__dropdown-link--active');
        }
    });
});






