$(document).ready(function(){
    $(".choose-sphere__slider, .teachers-blocks, .clients-slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<img class='arrow arrow-left' src='./img/misc/arrow-left.png' alt='arrow-left'>", "<img class='arrow arrow-right' src='./img/misc/arrow-right.png' alt='arrow-right'>"],
        items: 5,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1,
            },
            // breakpoint from 600 up
            630 : {
                items: 2,
            },
            // breakpoint from 992 up
            992 : {
                items: 5,
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

    if($(window).width() < 451) {
        player1 = new YT.Player('divPlayer1', {
            height: '200',
            width: '100%',
            videoId: 'd8Oc90QevaI',
        });
    } else if ($(window).width() < 768) {
        player1 = new YT.Player('divPlayer1', {
            height: '300',
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

let burger = document.body.querySelector('.header-burger');
burger.addEventListener('click', function () {
   burger.classList.toggle('burger-active');
    $('.header-burger__menu').slideToggle();
});
