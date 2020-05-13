//video
let canResize = true;
$('.video-wrapper').height($('.video-wrapper').width() / 3.5)
$(window).resize(function () {
    if (canResize === true) {
        $('.video-wrapper').height($('.video-wrapper').width() / 3.5)
    }
});


var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;

function onYouTubeIframeAPIReady() {
    player1 = new YT.Player('divPlayer1', {
        height: '350',
        width: '100%',
        videoId: 'd8Oc90QevaI',
    });
}

function play1() {
    canResize = false;
    $('.showOnPlay').show().css('display', 'block');
    $('.video-wrapper').hide();
    $('#divPlayer1').show();
    $('iframe').css('display', 'block');
    player1.playVideo();
}

$(document).ready(function () {
    $('.video-block').click(function () {
        setTimeout(play1, 500);
    })
})


