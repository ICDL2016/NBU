$(document).ready(function(){
    $(".clients-slider, .teachers-blocks, .choose-sphere__slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<img class='arrow arrow-left' src='./img/misc/arrow-left.png' alt='arrow-left'>", "<img class='arrow arrow-right' src='./img/misc/arrow-right.png' alt='arrow-right'>"],
        items: 5,
        responsive : {
            0 : {
                items: 1,
            },
            440 : {
                items: 2,
            },
            610 : {
                items: 3,
            },
            780 : {
                items: 4,
            },
            950 : {
                items: 5,
            },
            1120 : {
                items: 6,
            },
            1290 : {
                items: 7,
            },
            1460 : {
                items: 8,
            },
            1630 : {
                items: 9,
            },
            1800 : {
                items: 10,
            },
        }
    });
});


//бургер-меню
let burger = document.body.querySelector('.header-burger');
burger.addEventListener('click', function () {
   burger.classList.toggle('burger-active');
    $('.header-burger__menu').slideToggle();
});


//отзывы
// let reviewBtn = document.body.querySelector('.footer-bottom__right');
// reviewBtn.addEventListener('click', function (e) {
//     e.preventDefault();
//     $('.reviews').slideToggle();
// });