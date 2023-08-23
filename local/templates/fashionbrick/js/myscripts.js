
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
   $('.slider__main-inner').slick({
       dots: true,
       infinite: true,
       autoplay: true,
       autoplaySpeed: 5000,
       //fade:true,
       // cssEase:'ease',
       pauseOnFocus: false,
       pauseOnHover: false
});   $('.slider__test').slick({
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
// $(document).ready(function() {
//     $('.new_slider').slick({
//         // dots: true,
//         // infinite: false,
//         // autoplay: true,
//         // autoplaySpeed: 2000
//     });
// });
// $(document).ready(function() {
//     $('.bx_1847241719_21').slick({
//         // dots: true,
//         // infinite: false,
//          autoplay: true,
//         // autoplaySpeed: 2000
//     });
// })

$(document).ready(function(){
    $('.bx_catalog_line_ul').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        //fade:true,
        // cssEase:'ease',
        pauseOnFocus: false,
        pauseOnHover: false
    });
    // var acc = document.getElementsByClassName("subSection");
    // var i;
    //
    // for (i = 0; i < acc.length; i++) {
    //     acc[i].addEventListener("click", function() {
    //         /* Toggle between adding and removing the "active" class,
    //         to highlight the button that controls the panel */
    //         this.classList.toggle("active");
    //
    //         /* Toggle between hiding and showing the active panel */
    //         var panel = this.nextElementSibling;
    //         if (panel.style.display === "block") {
    //             panel.style.display = "none";
    //         } else {
    //             panel.style.display = "block";
    //         }
    //     });
    // }
});;