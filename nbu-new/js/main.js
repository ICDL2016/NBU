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

//video
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {

    if($(window).width() < 576) {
        player1 = new YT.Player('divPlayer1', {
            height: '350',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if ($(window).width() < 768) {
        player1 = new YT.Player('divPlayer1', {
            height: '400',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if ($(window).width() < 992) {
        player1 = new YT.Player('divPlayer1', {
            height: '450',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else {
        player1 = new YT.Player('divPlayer1', {
            height: '550',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    }

}

function play1(event) {
    $('.video-wrapper').hide();
    $('#divPlayer1').show();
    $('iframe').css('display', 'block');
    player1.playVideo();
}

//бургер-меню
let burger = document.body.querySelector('.header-burger');
burger.addEventListener('click', function () {
   burger.classList.toggle('burger-active');
    $('.header-burger__menu').slideToggle();
});
