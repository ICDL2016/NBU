<?php require_once '_header.php'; ?>
<?php require_once '_video.php'; ?>

<div class="mt-5"></div>
<?php require_once '_choose-sphere.php'; ?>

<div class="mt-5"></div>
<?php require_once '_choose-course.php'; ?>

<div class="mt-5"></div>
<?php require_once '_diploma.php'; ?>

<div class="mt-5"></div>
<?php require_once '_profit.php'; ?>

<div class="mt-5"></div>
<?php require_once '_knowledge.php'; ?>

<div class="mt-5"></div>
<?php require_once '_about.php'; ?>

<div class="mt-5"></div>
<?php require_once '_teachers.php'; ?>

<div class="mt-5"></div>
<?php require_once '_clients.php'; ?>

<div class="mt-5"></div>
<?php require_once '_study.php'; ?>

<div class="mt-5"></div>
<?php require_once '_start.php'; ?>

<div class="margin-top125"></div>
<?php require_once '_more.php'; ?>

<?php require_once '_menu.php'; ?>

<?php require_once '_footer.php'; ?>
<?php require_once '_scripts.php'; ?>
<script>
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
</script>
<?php require_once '_end.php'; ?>