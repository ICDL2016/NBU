$(document).ready(function () {
    $(".clients-slider, .teachers-blocks, .choose-sphere__slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<img class='arrow arrow-left' src='./img/misc/arrow-left.png' alt='arrow-left'>", "<img class='arrow arrow-right' src='./img/misc/arrow-right.png' alt='arrow-right'>"],
        items: 5,
        responsive: {
            0: {
                items: 1,
            },
            440: {
                items: 2,
            },
            610: {
                items: 3,
            },
            780: {
                items: 4,
            },
            950: {
                items: 5,
            },
            1120: {
                items: 6,
            },
            1290: {
                items: 7,
            },
            1460: {
                items: 8,
            },
            1630: {
                items: 9,
            },
            1800: {
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


// псевдовалидация

let emptyTop = false;
let emptyBottom = false;
$('.form-input__name').on('click', function () {
    emptyTop = true;
    if (emptyBottom === true && ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1)) {
        $(this).parent().children('.form-input__span-email').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-name').hide();
    $(this).parent().children('.form-input__name').removeClass('border-red');
});

$('.form-input__email').on('click', function () {
    emptyBottom = true;
    if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-email').hide();
    $(this).parent().children('.form-input__email').removeClass('border-red');
});

$('.popup-form__submit').on('click', function () {
    event.preventDefault();
    let send = true;

    if ($(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
        $(this).parent().children('.form-input__name').addClass('border-red');
        send = false;
    }

    if ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1) {
        $(this).parent().children('.form-input__span-email').show();
        $(this).parent().children('.form-input__email').addClass('border-red');
        send = false;
    }

    if (send === true) {
        $(this).parent().submit();
    }
});

//открытие формы-модалки
$('.show-form__btn, .video-button, .start-button').on('click', function (e) {
    event.preventDefault();
    $('.overlay').fadeIn();
    $('.popup').fadeIn();
    $('body').css('overflow', 'hidden');
});

$('.overlay, .popup-close').on('click', function () {
    $('.overlay').fadeOut();
    $('.popup').fadeOut();
    $('body').css('overflow', 'visible');
});