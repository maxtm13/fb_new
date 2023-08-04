
$().fancybox({
    selector: '[data-fancybox="images"]',
    thumbs: {
        // Показывать превью
        autoStart: false,
    },
    keyboard: true,
    buttons: [
        // Показывать кнопку закрытия модалки
        "close"
    ],
    // Эффект анимации при перелючении
    transitionEffect: "zoom-in-out",
    // Зацикливать превью
    loop: true,
});

$(document).ready(function(){
   $('.main_slider').slick({
       dots: true,
       infinite: true,
       autoplay: true,
       autoplaySpeed: 5000,
       //fade:true,
       // cssEase:'ease',
       pauseOnFocus: false,
       pauseOnHover: false
});
});
$(document).ready(function() {
    $('.new_slider').slick({
        // dots: true,
        // infinite: false,
        // autoplay: true,
        // autoplaySpeed: 2000
    });
});