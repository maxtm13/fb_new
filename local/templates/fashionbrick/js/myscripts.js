

$(document).ready(function () {
    //Слайдер баннеров
    $('.slider__main-inner').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        //fade:true,
        // cssEase:'ease',
        pauseOnFocus: false,
        pauseOnHover: false
    });
    // Слайдер разделов каталога
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
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    // Галерея фото
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
    let burger=document.querySelector('.burger-menu')
    burger.addEventListener("click", function (){
        document.querySelector('.logo').classList.toggle('active')
        burger.classList.toggle('active')
    })
});

$(document).ready(function () {


});
